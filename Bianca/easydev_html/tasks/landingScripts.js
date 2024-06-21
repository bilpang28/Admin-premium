'use strict';

// Build Landing page assets

const minifyjs = require('gulp-js-minify');

module.exports = {
  build: 1,
  name: 'compile:landing minify-js',

  run(done) {    
    return this.gulp.src('./app/landing/js/**/*.js')
      .pipe(minifyjs())
      .pipe(this.gulp.dest(`${this.paths._landing}/assets/js/`));
  },

  watch() {
    return {
      files: './app/landing/js/**/*.js',
      tasks: this.name,
    };
  },

};
