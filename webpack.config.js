const Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('security-login', './assets/security/js/login.js')
  .addEntry('security-register', './assets/security/js/register.js')
  .addEntry('app-home', './assets/app/js/home.js')
  .enableStimulusBridge('./assets/controllers.json')
  .splitEntryChunks()
  .enableSingleRuntimeChunk()
  .cleanupOutputBeforeBuild()
  .enableBuildNotifications(false)
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction())
  .enableSassLoader()
  .enablePostCssLoader();

module.exports = Encore.getWebpackConfig();

