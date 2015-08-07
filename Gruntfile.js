module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                includePaths: ['bower_components/foundation/scss']
            },
            dist: {
                options: {
                    outputStyle: 'compressed',
                    sourceMap: true,
                },
                files: {
                    'css/app.css': 'scss/app.scss'
                }
            }
        },
        postcss: {
            options: {
                map: {
                    inline: false, // save all sourcemaps as separate files...
                    annotation: 'css/' // ...to the specified directory
                },
                processors: [
                    require('pixrem')(), // add fallbacks for rem units
                    require('autoprefixer-core')({browsers: 'last 2 versions'}), // add vendor prefixes
                    require('cssnano')() // minify the result
                ]
            },
            dist: {
                src: 'css/*.css'
            }
        },
        watch: {
            grunt: {
                options: {
                    reload: true
                },
                files: ['Gruntfile.js']
            },
            sass: {
                files: 'scss/**/*.scss',
                tasks: ['sass']
            },
            postcss: {
                files: 'css/*.css',
                tasks: ['postcss']
            }
        },
        responsive_images: {
            dev: {
                options: {
                    engine: 'im',
                    sizes: [{
                            width: 1200,
                            quality: 50
                        },
                        {
                            width: 800,
                            quality: 50
                        },
                        {
                            width: 600,
                            quality: 50
                        },
                        {
                            width: 400,
                            quality: 50
                        },
                        {
                            width: 500,
                            quality: 50
                        },
                        {
                            width: 300,
                            quality: 50
                        },
                        {
                            width: 250,
                            quality: 50
                        },
                        {
                            width: 200,
                            quality: 50
                        },
                        {
                            width: 150,
                            quality: 50
                        },
                        {
                            width: 100,
                            quality: 50
                        }
                    ]
                },
                files: [{
                        expand: true,
                        src: ['**/*.{jpg,gif,png}'],
                        cwd: 'images_src/',
                        dest: 'images/'
                    }]
            }
        },
    });


    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-responsive-images');
    
    grunt.registerTask('build', ['sass']);
    grunt.registerTask('default', ['build', 'watch']);
}