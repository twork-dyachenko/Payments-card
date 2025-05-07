
const { src, dest, parallel, series, watch } = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));
const connect = require('gulp-connect-php');
const autoprefixer = require('gulp-autoprefixer');

function styles() {
	return src(['app/assets/css/assistant.scss', 'app/assets/css/style.scss'])
   .pipe(sass({ outputStyle: 'expanded' }))
	.pipe(autoprefixer({ overrideBrowserslist: ['last 15 versions', '> 1%', 'ie 8', 'ie 7'], grid: true }))
	.pipe(dest('app/assets/css'))
	.pipe(browserSync.stream())
}

function php() {
   connect.server({
      base: 'app',
      port: 8010,
      keepalive: true,
   });
}

function browsersync() {
	browserSync.init({
      proxy: '127.0.0.1:8010',
		notify: false,
		online: false
	})
}

function scripts() {
	return src('app/assets/js/**/*.js')
		.pipe(browserSync.stream());
}

function startwatch() {
	watch('app/assets/js/**/*.js', scripts);
   watch('app/assets/css/**/*.scss', styles);
   watch(['app/**/*.php']).on('change', browserSync.reload);
}

exports.browsersync = browsersync;
exports.styles = styles;
exports.default = parallel(php, styles, browsersync, startwatch);