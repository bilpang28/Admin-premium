'use strict';

// Require

const fs = require('fs');

/**
 * Change the file system timestamps at the given `path`.
 *
 * @param {String} path
 *
 * @return {undefined}
 */
const ui = [
  'alerts',
  'buttons',
  'carousel',
  'collapse',
  'grids',
  'modal',
  'notification',
  'panels',
  'progress-bar',
  'slider',
  'tabs',
  'timeline',
  'tooltip',
  'typography',
];

const forms = [
  'basic_form',
  'check_form_controls',
  'file_upload',
  'floating',
  'form_dropzone',
  'form_layouts',
  'form_validation',
  'material_form',
  'wizard_form',
  'form_picker',
  'mask_form',
];
const default_page = [
  'faq',
  'project_summary',
  'search_results',
  'text-editor',
];

const tables = [
  'basic_tables',
  'data_table',
  'editable_table',
  'material_table',
];
const maps = [
  'google_map',
  'vector_map',
];
const account = [
  'email_confirmation',
  'log_in',
  'lock_screen',
  'log_in_photo',
  'profile',
  'register',
  'register_photo',
];
const charts = [
  'chart_js',
  'chartist_js',
  'echarts',
];
const eCommerce = [
  'cart',
  'catalog',
  'order_list',
  'payment',
  'product_edit',
  'product_page',
  'product_list',
];
const documentation = [
  'components',
  'file_structure',
  'installation',
  'introduction',
  'color_scheme',
  'navigation',
  'resources',
  'changelog',
]
const dashboards = [
  'booking_dashboard',
  'finance_dashboard',
  'online_marketing_dashboard',
  "e_commerce_dashboard",
  'fitness_dashboard',
  'app_dashboard'
]

module.exports = function(path) {
  try {
    const time = Date.now() / 1000;
    if(ui.filter(x => path.includes(x)).length){
      path = './app/pages/ui/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(forms.filter(x => path.includes(x)).length){
      path = './app/pages/forms/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(account.filter(x => path.includes(x)).length){
      path = './app/pages/account/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(charts.filter(x => path.includes(x)).length){
      path = './app/pages/charts/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(maps.filter(x => path.includes(x)).length){
      path = './app/pages/maps/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(tables.filter(x => path.includes(x)).length){
      path = './app/pages/tables/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(eCommerce.filter(x => path.includes(x)).length){
      path = './app/pages/ecommerce/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(default_page.filter(x => path.includes(x)).length){
      path = './app/pages/default_pages/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(documentation.filter(x => path.includes(x)).length){
      path = './app/pages/documentation/'+path.substring(path.lastIndexOf('/')+1);
    }
    if(dashboards.filter(x => path.includes(x)).length){
      path = './app/pages/dashboards/'+path.substring(path.lastIndexOf('/')+1);
    }
    fs.utimesSync(path, time, time);
  } catch (e) {
    console.log(e);
  }
};
