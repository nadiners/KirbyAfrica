// Requis
var gulp = require('gulp');
// Include plugins
var plugins = require('gulp-load-plugins')(); // tous les plugins de package.json

gulp.task('css', function () {
  return gulp.src('site/plugins/modules/**/*.css')
    /* ici les plugins Gulp à exécuter */
    .pipe(gulp.dest('assets/css'));
});