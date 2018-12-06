const gulp = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer"); 	//аутопрефиксер - не работает вроде как
const cssnano = require("gulp-cssnano"); 			//минимизация кода
const browserSync = require("browser-sync"); 		//обновление страницы браузера
const plumber = require("gulp-plumber"); 			//исключения ошибок кода
const rename = require("gulp-rename"); 				//для смены имени файла

gulp.task("scss", () => {
	return (
		gulp
			.src("dev/scss/**/style.scss")

			// контроль ошибок - к случае чего сервер не останавливать
			.pipe(plumber())

			// sass обработчик
			.pipe(sass())

			// автопрефиксный обработчик
			.pipe(
				autoprefixer(["last 15 version", "> 1%", "ie 8", "ie 7"], {
					cascade: false
				})
			)

			//создаю обычный css
			.pipe(gulp.dest("dist/css"))

			//создаю минифицированный css
			.pipe(cssnano())
			.pipe(
				rename({
					suffix: ".min"
				})
			)
			.pipe(gulp.dest("dist/css"))

			.pipe(browserSync.reload({ stream: true }))
	);
});

gulp.task("browser-sync", () => {
	browserSync({
		server: {
			baseDir: "dist"
		},
		notify: false
	});
});

gulp.task("default", ["browser-sync", "scss"], () => {
	gulp.watch("dev/scss/**/*.scss", ["scss"]);
	gulp.watch("dist/*.html", browserSync.reload);
});
