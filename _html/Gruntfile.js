module.exports = function(grunt){

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // sass
        sass: {
			dist: {
				options: {
					style: 'expanded',
					sourcemap: 'auto'
				},
				files: [{
					expand: true,
					cwd: '_source/css',
					src: ['**/*.scss'],
					dest: 'assets/css',
					ext: '.css'
				}]
			}
		},

        // concat
		concat: {
		    basic_and_extras: {
				files: {
		        	'assets/js/main.js': [
			        	'_source/js/main.js',
			        	'_source/js/vendor/*.js'
					]
				}
			},
		},

		// uglify
		uglify: {
			options: {
				mangle: true
			},
			build: {
				files: [
				{
					src: 'assets/js/main.js',
					dest: 'assets/js/main.min.js'
				}, 
				{
					expand: true,
					src: ['*.js', '!*.min.js', '!main.js'],
					dest: 'assets/js',
					cwd: 'assets/js',
					ext: '.min.js'
				}]
			},
			
		},

		// Copy files
		copy: {
			main: {
				files: [{
					expand: true,
					src: ['assets/**'],
					dest: '../webroot/wp-content/themes/keuze/',
				}]
			}
		},

		watch: {
			scripts: {
				files: [ '_source/js/**/*.js'],
				tasks: ['concat', 'uglify', 'copy']
			},
			css: {
				files: ['_source/css/**/*.scss'],
				tasks: ['sass']
			}
		},

		browserSync: {
			default_options: {
				bsFiles: {
					src: ['assets/**/*.*', '*.php']
				},
				options: {
					watchTask: true,
					proxy: 'html.keuze.nl',
					ghostMode: {
						clicks: true,
						scroll: true,
						links: true,
						forms: true
					}
				}
			}
		}
    });
    
    // Load all plugins
  	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

  	// Default task(s).
   grunt.registerTask('default', ['browserSync', 'watch']);

};