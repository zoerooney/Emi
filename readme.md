Emi Starter Theme
===========================

This is a clean WordPress starter theme cobbled together from a variety of resources over multiple years. Emi is intended to be used as a starting point for other WordPress themes, it is not meant to be a stand-alone theme in itself.


Set Up
------------
I use [String Replacer](http://www.tensionsoftware.com/osx/stringreplacer/) (a Mac app) to find and replace the following strings, keeping the same general format as shown:

`emi_theme` > `theme_name`

`emitheme` > `themename`

`Emi Theme` > `Theme Name`

Then, add a screenshot and you're ready to start!


Workflow
------------
This theme uses [Grunt](http://gruntjs.com/) to automate the following tasks:
* SCSS and COMPASS preprocessing (with [Breakpoint](http://breakpoint-sass.com/))
* Auto browser prefixing (via [Autoprefixer](https://github.com/ai/autoprefixer))
* Minifying CSS
* Compressing Images
* Concantenating and minifying js files

It also watches changes to files for use with [LiveReload](http://livereload.com/)

To make use of Grunt (assuming you have it installed already - if not, [this tutorial](http://24ways.org/2013/grunt-is-not-weird-and-hard/) is recommended as a starting place), open the unzipped theme directory in Terminal and run `npm install` to ensure you have all the required dependencies. Then, you just enter `grunt` in Terminal each time you'd like to run the tasks.


Resources


Changelog
------------
* 0.3 Added webfont mixins
* 0.2 Added Grunt workflow
* 0.1 Updated theme name and added structures for SASS