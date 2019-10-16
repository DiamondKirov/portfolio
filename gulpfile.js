var gulp = require ('gulp');
var sass = require ('gulp-sass');
var rename = require ('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sassImport 	= require('gulp-sass-import');

function styleguid(done){
    gulp.src('./scss/*-style.scss')
    .pipe(autoprefixer({
        cascade: false
    }))
    .pipe(sass({
        errLogToConsole: true
    }))

    .pipe(gulp.dest('./css/'))
    done()
}

function watchSass(){
    gulp.watch("./scss/**/*", styleguid);
}

gulp.task('default', watchSass);