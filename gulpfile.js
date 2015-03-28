var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    // newer = require('gulp-newer'),
    // imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload');

// var imgSrc = 'assets/images/originals/*';
// var imgDest = 'assets/images';
    
gulp.task('styles', function(){
	return sass('scss/') 
		.on('error', function (err) {
			console.error('Error!', err.message);
		})
		.pipe(gulp.dest(''))
		.pipe(autoprefixer())
		.pipe(minifycss())
		.pipe(gulp.dest(''))
		.pipe(livereload());
});

// gulp.task('images', function() {
// 	return gulp.src(imgSrc, {base: 'assets/images/originals'})
// 		.pipe(newer(imgDest))
//         .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
//         .pipe(gulp.dest(imgDest));
// });

//gulp.task('default', ['styles', 'images']);

gulp.task('default',['styles']);

gulp.task('watch', function() {
	
	livereload.listen();
	
	// Watch .scss files
	gulp.watch('scss/*.scss', ['styles']);
	gulp.watch('scss/**/*.scss', ['styles']);

	// watch original images directory
	//gulp.watch('assets/images/originals/**', ['images']);

});