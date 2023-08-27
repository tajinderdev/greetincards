const {src, dest, series, parallel, watch} = require("gulp");
const babel = require('gulp-babel');
const sass = require("gulp-sass");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const rename = require('gulp-rename');

const src_paths = {
    scss: "src/scss/**/*.scss",
    js: "src/js/**/*.js",
};

const dist_paths = {
    css: "dist/css",
    js: "dist/js",
};

/*
function scssTask() {
    return src(src_paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(concat('app.css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dist_paths.css))
}
 */

function scssTask() {
    return src(src_paths.scss)
        .pipe(sass())
        .pipe(dest(dist_paths.css))
        .pipe(postcss([autoprefixer('last 2 versions'), cssnano()]))
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest(dist_paths.css))
}

function jsTask() {
    return src(src_paths.js)
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(dest(dist_paths.js))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(dest(dist_paths.js))
}

function watchTask() {
    watch(
        [src_paths.scss, src_paths.js],
        parallel(scssTask, jsTask)
    );
}

exports.default = series(
    parallel(scssTask, jsTask),
    watchTask
);
