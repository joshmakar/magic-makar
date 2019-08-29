//////////////////////////////////////////////////
// Setup and configure environment
//////////////////////////////////////////////////

const gulp        = require('gulp'),
      sass        = require('gulp-sass'),
      ts          = require('gulp-typescript'),
      browserSync = require('browser-sync').create();
const tsProject = ts.createProject('tsconfig.json');


//////////////////////////////////////////////////
// Create tasks
//////////////////////////////////////////////////

// Compile SCSS
function scss() {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
}

// Compile TS
function typescript() {
  return tsProject.src()
    .pipe(tsProject())
    .js.pipe(gulp.dest('./js'));
}

// Initializae Browser Sync
function browserSyncInit(done) {
  browserSync.init({
    server: {
      baseDir: './'
    }
  }, done);
}

// Watch
function watch() {
  browserSyncInit();
  gulp.watch('./sass/**/*.scss', scss);
  gulp.watch('./ts/**/*.ts', typescript);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}


//////////////////////////////////////////////////
// Set up task names
//////////////////////////////////////////////////

exports.sass = scss;
exports.typescript = typescript;
exports.default = watch;