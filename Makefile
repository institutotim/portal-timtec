
build:
	cd src/wp-content/themes/timtec/ && npm install
	cd src/wp-content/themes/timtec/ && ./node_modules/bower/bin/bower install
	cd src/wp-content/themes/timtec/ && ./node_modules/gulp/bin/gulp.js

style:
	cd src/wp-content/themes/timtec/ && ./node_modules/gulp/bin/gulp.js styles

watch:
	cd src/wp-content/themes/timtec/ && ./node_modules/gulp/bin/gulp.js watch