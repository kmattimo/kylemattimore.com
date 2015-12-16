var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

//all scss imported in site.scss, except page-specific stuff
var output = './static/css/'
var input = './static/sass/site.scss';
var watchFiles = ['./static/sass/*.scss'];
var templateFiles = './templates/templates/views/*.tpl';
var jsFiles= './static/js/*.js';


gulp.task('sass', function() {
    gulp.src(input)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(output))
        .pipe(browserSync.stream());
});

gulp.task('watch', function() {
    gulp.watch(watchFiles,['sass']);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./web/"
        }
    });
});

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        proxy: "localhost:8000"
    });

    gulp.watch(watchFiles, ['sass']);
    gulp.watch([templateFiles, jsFiles]).on('change', browserSync.reload);
});

//Watch task
gulp.task('default', ['watch']);