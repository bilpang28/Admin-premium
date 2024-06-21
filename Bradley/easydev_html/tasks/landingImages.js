'use strict';

// landing page assets
module.exports = {
  build: 1,
  name: 'copy:landing images',

  run(done) {
    return this.gulp.src('./app/landing/img/**/*')
      .pipe(this.gulp.dest(`${this.paths._landing}/assets/img/`));
  },
};
