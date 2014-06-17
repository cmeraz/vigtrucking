// Load plugins
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

// Styles
gulp.task('styles', function () {
  var css_path = 'css'
  return gulp.src('src/scss/vigtrucking.scss')
  .pipe(sass({ 
    style: 'expanded', compass: true 
  }))
  .pipe(gulp.dest('css'))
  .pipe(rename({suffix: '.min'}))
  .pipe(minifycss())
  .pipe(gulp.dest('css'))
  .pipe(notify({message: 'SASS and CSS task complete.'}));
});

// Images
gulp.task('images', function() {
  return gulp.src('src/img/**/*')
  .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
  .pipe(gulp.dest('images'))
  .pipe(notify({message: 'Images were all optimized.'}));
});

