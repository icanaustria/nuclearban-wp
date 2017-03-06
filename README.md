Demo: http://nuclearban.icanaustria.at

Currently using Foundation 6.3.0

### What is this?
nuclearban-wp is a WordPress theme built with Foundation 6 for websites of the International Campaign to Abolish Nuclear Weapons (ICAN). The theme is mobile first, this means it is build and optimized for small and medium sized screens like smartphones and tablets over mobile connections.


### What do I need to use it?



### Stylesheet Folder Structure

style.css: Do not worry about this file. (For some reason) it's required by WordPress. All styling are handled in the Sass files described below

scss/foundation.scss: Imports for Foundation components and your custom styles.

scss/config/_settings.scss: Original Foundation 5 base settings
scss/config/_custom-settings.scss: Copy the settings you will modify to this file. Make it your own
scss/site/*.scss: Unleash your creativity and make it look perfect. Create the files you need (and remember to make import statements for all your files in scss/foundation.scss)

css/foundation.css: All Sass files are minified and compiled to this file

css/foundation.css.map: CSS source maps

### Script Folder Strucutre

bower_components/: This is the source folder where all Foundation components are located. foundation update will check and update scripts in this folder.

js/custom: This is where you put all your custom scripts. Every .js file you put in this directory will be minified and concatinated to foundation.js

js/vendor: Vendor scripts are copied from bower_components/ to this directory. We use this path for enqueing the vendor scripts in WordPress.

Please note that you must run grunt build in your terminal for the script to be copied and concatinated. See Gruntfile.js for details

### License

GNU General Public License & MIT.

Confused yet?

All ICAN, JointsWP and WordPress functions and styles are under the GPL license. All Foundation components fall under the MIT license.