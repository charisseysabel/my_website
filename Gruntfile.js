module.exports = function(grunt) {

    // config 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {   
            dist: {
                src: [
                    'scripts/*.js'
                ],
                dest: 'scripts/build/production.js',
            }
        },

        uglify: {
            build: {
                src: 'scripts/build/production.js',
                dest: 'scripts/build/production.min.js'
            }
        },

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: 'img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'img/build/'
                }]
            }
        }


    });

    grunt.loadNpmTasks('grunt-contrib-imagemin');

    grunt.registerTask('default', ['imagemin']);

};