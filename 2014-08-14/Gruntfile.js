module.exports = function(grunt) {
   grunt.initConfig({
    jshint: {
           files: ['*.js'],
           options: {
               jshintrc: ".jshintrc"
           }
       }
    });

   grunt.loadNpmTasks('grunt-contrib-jshint');

   grunt.registerTask('test', ['jshint']);
   grunt.registerTask('default', ['task1', 'task2']);
};
