'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function() {
    return gulp.src('./scss/*.scss')
        .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./css'));
});
gulp.task('default', ['sass'], function() {
    gulp.watch([
        'scss/*.scss'
    ], function() {
        gulp.run('sass');
    })
})
