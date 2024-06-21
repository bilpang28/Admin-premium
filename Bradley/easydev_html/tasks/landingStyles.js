'use strict';

// Build Landing page assets

const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const notify = require('gulp-notify');
const cssnano = require('gulp-cssnano');
const plumber = require('gulp-plumber');

module.exports = {
  build: 1,
  name: 'compile:landing styles',

  run(done) {    
    return this.gulp.src('./app/landing/scss/main.scss')
      .pipe(plumber({errorHandler: notify.onError("Style Build Error: <%= error.message %>")}))
      .pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(autoprefixer('last 4 version'))
      .pipe(sourcemaps.write())
      .on('error', onError)
      .pipe(cssnano())
      .pipe(this.gulp.dest(`${this.paths._landing}/assets/css/`));
  },

  watch() {
    return {
      files: './app/landing/scss/**/*.scss',
      tasks: this.name,
    };
  },

};

function onError(error) {
  console.log(error.toString());
  this.emit('end');
};