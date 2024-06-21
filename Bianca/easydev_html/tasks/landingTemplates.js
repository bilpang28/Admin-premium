'use strict';

// Build Landing page

const pug = require('gulp-pug');

module.exports = {
  build: 1,
  name: 'compile:landing page',

  run(done) {
    return this.gulp.src(this.paths.lPage('pug/**/*.pug'))
      .pipe(pug({
        pretty: true
      }))
      .pipe(this.gulp.dest(this.paths._landing));
  },

  watch() {
    return {
      files: this.paths.lPage('pug/**/*.pug'),
      tasks: this.name,
    };
  },

};
