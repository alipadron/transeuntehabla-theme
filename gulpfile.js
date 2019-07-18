var gulp = require("gulp"),
  postcss = require("gulp-postcss"),
  rgba = require("postcss-hexrgba"),
  autoprefixer = require("autoprefixer"),
  cssvars = require("postcss-simple-vars"),
  nested = require("postcss-nested"),
  cssImport = require("postcss-import"),
  mixins = require("postcss-mixins"),
  webpack = require("webpack"),
  settings = require("./settings"),
  browserSync = require("browser-sync");

gulp.task("styles", function() {
  return gulp
    .src(settings.themeLocation + "assets/css/style.css")
    .pipe(postcss([cssImport, mixins, cssvars, nested, rgba, autoprefixer]))
    .on("error", error => {
      console.log(error.toString());
    })
    .pipe(gulp.dest(settings.themeLocation));
});

gulp.task("scripts", function(done) {
  webpack(require("./webpack.config.js"), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    done();
  });
});

gulp.task("watch", function(done) {
  browserSync.init({
    notify: false,
    proxy: settings.urlToPreview,
    ghostMode: false,
    online: true,
  });

  gulp.watch("./**/*.php", function(done) {
    browserSync.reload();
    done();
  });
  gulp.watch(settings.themeLocation + "assets/css/**/*.css", gulp.parallel("waitForStyles"));
  gulp.watch(
    [settings.themeLocation + "assets/js/modules/*.js", settings.themeLocation + "assets/js/scripts.js"],
    gulp.parallel("waitForScripts")
  );
  done();
});

gulp.task(
  "waitForStyles",
  gulp.series("styles", function() {
    return gulp.src(settings.themeLocation + "style.css").pipe(browserSync.stream());
  })
);

gulp.task(
  "waitForScripts",
  gulp.series("scripts", function(done) {
    browserSync.reload();
    done();
  })
);
