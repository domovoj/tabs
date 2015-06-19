module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        clean: ["dist"],

        uglify: {
            main: {
                src: 'src/jquery.tabs.js',
                dest: 'dist/jquery.tabs.min.js'
            },
        },
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.registerTask('default', ['clean', 'uglify']);
};