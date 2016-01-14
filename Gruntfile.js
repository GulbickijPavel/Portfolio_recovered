module.exports = function(grunt) {

    grunt.initConfig({
        cssmin: {
            main: {
                files: {
                    'css/styles.min.css': 'css/styles.css',
                    'css/bootstrap.min.css': 'css/bootstrap.css',
                    'css/jquery.bxslider.min.css': 'slider/jquery.bxslider.css',
                }
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            js: {
                src: ['js/vendor/*.js', 'slider/jquery.bxslider.min.js'],
                dest: 'js/combined.min.js'
            }
        },
        uglify: {
            my_target: {
              files: {
                'js/script.min.js': ['js/script.js']
              }
            }
          },
        less: {
           development: {
             options: {
               compress: true,
               yuicompress: true,
               optimization: 2
             },
             files: {
               "css/styles.css": "css/less/styles.less" // destination file and source file
             }
           }
         }
    });
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat' );
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('devCss', ['less', 'cssmin']);
  //  grunt.registerTask('dev', ['cssmin', 'concat', 'uglify', 'less']);
    grunt.registerTask('dev', ['cssmin', 'concat', 'uglify', 'less']);
};
