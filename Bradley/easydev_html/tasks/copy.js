'use strict';

// Copy images for styles

module.exports = {
  build: 1,
  name: 'copy:tinymce',

  run(done) {
    return this.gulp.src('./app/js/tinymce/**/*')
      .pipe(this.gulp.dest(`dist/scripts/tinymce/`));
  },
};
