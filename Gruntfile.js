/* global module require process */
module.exports = function(grunt) {
  var path = require("path");

  require("load-grunt-config")(grunt, {
    configPath: path.join(process.cwd(), "grunt/config"),
    jitGrunt: {
      customTasksDir: "grunt/tasks",
      staticMappings: {
        makepot: "grunt-wp-i18n"
      }
    },
    data: {
      i18n: {
        author: "Sérgio Santos",
        support: "https://s3rgiosan.com/",
        pluginSlug: "wpzeerat",
        mainFile: "wpzeerat",
        textDomain: "wpzeerat",
        potFilename: "wpzeerat"
      },
      badges: {
        packagist_stable:
          "[![Latest Stable Version](https://poser.pugx.org/s3rgiosan/wpzeerat/v/stable)](https://packagist.org/packages/s3rgiosan/wpzeerat)",
        packagist_downloads:
          "[![Total Downloads](https://poser.pugx.org/s3rgiosan/wpzeerat/downloads)](https://packagist.org/packages/s3rgiosan/wpzeerat)",
        packagist_license:
          "[![License](https://poser.pugx.org/s3rgiosan/wpzeerat/license)](https://packagist.org/packages/s3rgiosan/wpzeerat)",
        codacy_grade:
          "[![Codacy Badge](https://api.codacy.com/project/badge/Grade/fd29755824fc4fc9a483f65ada13ea98)](https://www.codacy.com/app/s3rgiosan/wpzeerat?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=s3rgiosan/wpzeerat&amp;utm_campaign=Badge_Grade)",
        codeclimate_grade:
          "[![Code Climate](https://codeclimate.com/github/s3rgiosan/wpzeerat/badges/gpa.svg)](https://codeclimate.com/github/s3rgiosan/wpzeerat)"
      }
    }
  });
};
