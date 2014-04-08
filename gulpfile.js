var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    newer = require('gulp-newer'),
    imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload'),
    lr = require('tiny-lr'),
    server = lr();

var imgSrc = 'assets/images/originals/*';
var imgDest = 'assets/images';
    
gulp.task('styles', function(){
	return gulp.src('scss/style.scss', {base: 'scss'})
	    .pipe(plumber())
	    .pipe(sass({ style: 'expanded' }))
	    .pipe(gulp.dest(''))
	    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
	    .pipe(minifycss())
	    .pipe(gulp.dest(''))
	    .pipe(livereload(server));
});

gulp.task('images', function() {
  return gulp.src(imgSrc, {base: 'assets/images/originals'})
        .pipe(newer(imgDest))
        .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
        .pipe(gulp.dest(imgDest));
});

gulp.task('default', ['styles', 'images']);

gulp.task('watch', function() {
  // Listen on port 35729
  server.listen(35729, function (err) {
      if (err) {
        return console.log(err)
      };
  
      // Watch .scss files
      gulp.watch('scss/*.scss', ['styles']);
      gulp.watch('scss/**/*.scss', ['styles']);
      gulp.watch('assets/images/originals/**', ['images']);
  
    });

});