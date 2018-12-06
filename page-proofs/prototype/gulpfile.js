const gulp = require("gulp");
const browserSync = require("browser-sync");

gulp.task("browser-sync", () => {
	browserSync({
		server: {
			baseDir: "dist"
		},
		notify: false
	});
});


gulp.task("default", ["browser-sync"], () => {
	gulp.watch("dist/*.html", browserSync.reload);
	gulp.watch("dist/*/*.css", browserSync.reload);
	gulp.watch("dist/js/*.js", browserSync.reload);
});
