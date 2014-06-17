// Declare all the Gulp.js plugins necesseary.
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    jshint = require ('gulp-jshint'),
    minifycss = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    clean = require('gulp-clean'),
    livereload = require('gulp-livereload'),
    cache = require('gulp-cache'),
    notify = require('gulp-notify');

// SASS task
gulp.task('sass', function () {
  return gulp.src('scss/vigtrucking.scss')
  .pipe(sass({ style: 'compressed', compass: true, }))
  .pipe(gulp.dest('css'));
});