const gulp = require("gulp"),
	  browserSync = require('browser-sync').create();

gulp.task('browser-sync',function(){
	browserSync.init({
		server:{
			baseDir: "./"
		},
		open: false
	})
})

gulp.task('watch', ['browser-sync'], function () {
    gulp.watch("*.+(html|css)").on('change', browserSync.reload);
});