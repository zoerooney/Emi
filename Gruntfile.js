'use strict';
module.exports = function(grunt) {

	// load all grunt tasks that start with 'grunt-'
	require('load-grunt-tasks')(grunt);
	
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		
		compass: {
		    dist: {
		      options: {
		        sassDir: 'scss',
		        cssDir: '.',
		        // require: 'breakpoint',
		        // environment: 'production'
		      }
		    }
		},
	    autoprefixer: {
	        dist: {
	            files: {
	                'style.max.css': 'style.max.css'
	            }
	        }
	    },
	    cssmin: {
	      minify: {
	        expand: true,
	        src: [ 'style.max.css' ],
	        dest: '.',
	        ext: '.css'
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
		   compass: {
				files: ['scss/{,*/}*.scss'],
				tasks: ['compass:dist']
			},
			csspostprocess: {
				files: 'style.max.css',
				tasks: ['autoprefixer', 'cssmin']
			},
			livereload: {
				options: { livereload: true },
				files: ['scss/{,*/}*.scss', '*.php', 'images/*']
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
	grunt.registerTask('default', ['compass','autoprefixer','imagemin','cssmin']);
	grunt.registerTask('dev', ['watch']);

};