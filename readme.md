Emi Starter Theme, Gulpified
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
This theme uses [Gulp](http://gulpjs.com/) to automate the following tasks:
* Sass preprocessing
* Auto browser prefixing (via [Autoprefixer](https://github.com/ai/autoprefixer))
* Minifying CSS

It also watches changes to files for use with [LiveReload](http://livereload.com/)
