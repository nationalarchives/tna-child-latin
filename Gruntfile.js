module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        jasmine: {
            pivotal: {
                src: 'js/compiled/*.js',
                options: {
                    specs: 'js/spec/*Spec.js',
                    helpers: 'js/spec/*Helper.js'
                }
            }
        }
    });

    // Load the plugins that provide the tasks.
    grunt.loadNpmTasks('grunt-contrib-jasmine');


};