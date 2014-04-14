Emi Starter Theme
=================

This is a clean WordPress starter theme cobbled together from a variety of resources over multiple years. Emi is intended to be used as a starting point for other WordPress themes, it is not meant to be a stand-alone theme in itself.

If you want to get even more automated, there's also a Yeoman generator that configures Emi for you: https://github.com/zoerooney/yo-emi


Set Up
------------
I use [String Replacer](http://www.tensionsoftware.com/osx/stringreplacer/) (a Mac app) to find and replace the following strings, keeping the same general format as shown:

`themeName` > `Theme Name`

`themeHandle` > `Theme_Name`

`themeFunction` > `theme_name`

`themeTextDomain` > `theme-name`

There are additional variables in `scss/styles.scss` you'll want to update one at a time, and a few in `footer.php` as well.

Workflow
------------
This theme uses [Gulp](http://gulpjs.com/) to automate the following tasks:
* Sass preprocessing
* Auto browser prefixing (via [Autoprefixer](https://github.com/ai/autoprefixer))
* Minifying CSS

It also watches changes to files for use with [LiveReload](http://livereload.com/)

Changelog
------------
1.2 Updated variables  
1.1 General cleanup and tidying  
1.0 Initial public release