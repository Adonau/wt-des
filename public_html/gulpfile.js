const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const watch = require('gulp-watch');

const min = require("gulp-clean-css");
const concat = require('gulp-concat');

gulp.task('sass-compail', function () {
    return gulp.src('./scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./css/'))

})

gulp.task('min', function () {
    return gulp.src('./css/main.css')

        .pipe(concat('min-main.css'))
        .pipe(min({
            level: 2
        }))

        .pipe(gulp.dest('./css'))
})


gulp.task('watch', function () {
    gulp.watch('./scss/**/*.scss', gulp.series('sass-compail', 'min'))
})


