var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('styles', function(){
	gulp.src('sass/*.scss')
	.pipe(sass({errLogToConsole: true}))
	.pipe(gulp.dest('.'))
});

gulp.task('watch',function() {
   gulp.watch('sass/*.scss',['styles']); // we run the "styles" task every time one of the scss files change
 });