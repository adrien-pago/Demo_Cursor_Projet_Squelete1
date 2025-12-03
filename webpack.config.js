const Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('security-login', './assets/security/js/login.js')
  .addEntry('security-register', './assets/security/js/register.js')
  .addEntry('app-home', './assets/app/js/home.js')
  .addEntry('employee-dashboard', './assets/employee/js/dashboard.js')
  .addEntry('employee-reserve', './assets/employee/js/reserve.js')
  .addEntry('employee-reservations', './assets/employee/js/reservations.js')
  .addEntry('employee-modal', './assets/employee/js/modal.js')
  .addEntry('employee-mess', './assets/employee/js/mess.js')
  .addEntry('chef-agenda', './assets/chef/js/agenda.js')
  .addEntry('chef-menu-day', './assets/chef/js/menu-day.js')
  .addEntry('chef-manage-meals', './assets/chef/js/manage-meals.js')
  .addEntry('chef-select-items', './assets/chef/js/select-items.js')
  .addEntry('chef-entrees', './assets/chef/js/entrees.js')
  .addEntry('chef-plats', './assets/chef/js/plats.js')
  .addEntry('chef-accompagnements', './assets/chef/js/accompagnements.js')
  .addEntry('chef-salades', './assets/chef/js/salades.js')
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

