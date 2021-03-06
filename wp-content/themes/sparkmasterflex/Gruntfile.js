module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      dist: {
        src: [
          'javascripts/libs/*.js', // All JS in the libs folder
          'javascripts/base.js'  // This specific file
        ],
        dest: 'javascripts/build/main.js',
      }
    },

    uglify: {
      build: {
        src: 'javascripts/build/production.js',
        dest: 'javascripts/build/production.min.js'
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'images/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/build/'
        }]
      }
    },

    coffee: {
      glob_to_multiple: {
        expand: true,
        flatten: false,
        cwd: 'javascripts/coffee',
        src: ['**/*.coffee'],
        dest: "javascripts",
        ext: '.js',
      }
    },

    cssmin: {
      combine: {
        files: {
          'style.css': ['stylesheets/*.css']
        }
      }
    },

    sass: {
      dist: {
        files: [{
          expand: true,
          cwd: 'stylesheets/sass',
          src: ['*.scss'],
          dest: 'stylesheets/',
          ext: '.css'
        }]
      }
    },

    watch: {
      options: {
        livereload: true,
      },
      css: {
        files: ['stylesheets/sass/*.scss'],
        tasks: ['sass', 'cssmin'],
        options: {
          spawn: false,
        }
      },
      coffee: {
        files: ['javascripts/coffee/*.coffee'],
        tasks: 'coffee'
      },
      html: {
        files: ['index.php', '**/*.php', '**/*.css'],
        options: {
          livereload: true
        }
      }
    }

  });


  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-coffee');

  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['watch']);

};