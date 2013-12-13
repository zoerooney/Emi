'use strict';
module.exports = function(grunt) {

	// load all grunt tasks that start with 'grunt-'
	require('load-grunt-tasks')(grunt);
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
		sass: {
	      dist: {
	        options: {
	          // cssmin will minify later
	          style: 'expanded'
	        },
	        files: {
	          'style.css': 'scss/style.scss'
	        }
	      }
	    },
	    autoprefixer: {
	        dist: {
	            files: {
	                'style.css': 'style.css'
	            }
	        }
	    },
	    cssmin: {
	      minify: {
	        expand: true,
	        src: [ 'style.css' ],
	        dest: '.',
	        ext: '.min.css'
	      }
	    },
		imagemin: {
		    png: {
	            options: {
	                optimizationLevel: 7
	            },
	            files: [
	                {
	                    expand: true,
	                    cwd: './images/',
	                    src: ['*.png'],
	                    dest: './images/compressed/',
	                    ext: '.png'
	                }
	            ]
	        },
	        jpg: {
	            options: {
	                progressive: true
	            },
	            files: [
	                {
	                    expand: true,
	                    cwd: './images/',
	                    src: ['*.jpg'],
	                    dest: './images/compressed/',
	                    ext: '.jpg'
	                }
	            ]
	        }
		},
		watch: {
		   sass: {
	         // We watch and compile sass files as normal but don't live reload here
	         files: ['scss/*.scss'],
	         tasks: ['sass'],
	       },
	       styles: {
	           files: ['style.css'],
	           tasks: ['autoprefixer']
	       },
	       livereload: {
	         // Here we watch the files the sass task will compile to
	         // These files are sent to the live reload server after sass compiles to them
	         options: { livereload: true },
	         files: ['*'],
	       },
		},
		  
	  	concat: {
			// concat task configuration goes here.
		},
		uglify: {
			// uglify task configuration goes here.
		},
		
	});
	
	// Tells Grunt what to do when we type in "grunt" in Terminal
	grunt.registerTask('default', ['sass','autoprefixer','imagemin','cssmin',]);

};