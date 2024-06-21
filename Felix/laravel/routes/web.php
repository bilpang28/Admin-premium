<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Route::get('/', function () {
    return view('index.index');    
});*/


/* Dashboard */
Route::get('/',                                     'DashboardController@index')->name('dashboard.index');
Route::get('dashboard/cryptocurrency',              'DashboardController@cryptocurrency')->name('dashboard.cryptocurrency');
Route::get('dashboard/campaign',                    'DashboardController@campaign')->name('dashboard.campaign');
Route::get('dashboard/ecommerce',                   'DashboardController@ecommerce')->name('dashboard.ecommerce');

/* Apps */
Route::get('apps/inbox',                            'AppsController@inbox')->name('apps.inbox');
Route::get('apps/inboxdetail',                      'AppsController@inboxdetail')->name('apps.inboxdetail');
Route::get('apps/inboxcompose',                     'AppsController@inboxcompose')->name('apps.inboxcompose');
Route::get('apps/chat',                             'AppsController@chat')->name('apps.chat');
Route::get('apps/calendar',                         'AppsController@calendar')->name('apps.calendar');
Route::get('apps/events',                           'AppsController@events')->name('apps.events');
Route::get('apps/todolist',                         'AppsController@todolist')->name('apps.todolist');
Route::get('apps/filemanager',                      'AppsController@filemanager')->name('apps.filemanager');
Route::get('apps/contacts',                         'AppsController@contacts')->name('apps.contacts');
Route::get('apps/scrumboard',                       'AppsController@scrumboard')->name('apps.scrumboard');
Route::get('apps/blog',                             'AppsController@blog')->name('apps.blog');
Route::get('apps/social',                           'AppsController@social')->name('apps.social');

/* elements */
Route::get('elements/helperclass',                  'ElementsController@helperclass')->name('elements.helperclass');
Route::get('elements/bootstrap',                    'ElementsController@bootstrap')->name('elements.bootstrap');
Route::get('elements/typography',                   'ElementsController@typography')->name('elements.typography');
Route::get('elements/tabs',                         'ElementsController@tabs')->name('elements.tabs');
Route::get('elements/buttons',                      'ElementsController@buttons')->name('elements.buttons');
Route::get('elements/icons',                        'ElementsController@icons')->name('elements.icons');
Route::get('elements/notifications',                'ElementsController@notifications')->name('elements.notifications');
Route::get('elements/colors',                       'ElementsController@colors')->name('elements.colors');
Route::get('elements/dialogs',                      'ElementsController@dialogs')->name('elements.dialogs');
Route::get('elements/listgroup',                    'ElementsController@listgroup')->name('elements.listgroup');
Route::get('elements/mediaobject',                  'ElementsController@mediaobject')->name('elements.mediaobject');
Route::get('elements/modals',                       'ElementsController@modals')->name('elements.modals');
Route::get('elements/nestable',                     'ElementsController@nestable')->name('elements.nestable');
Route::get('elements/progressbars',                 'ElementsController@progressbars')->name('elements.progressbars');
Route::get('elements/rangesliders',                 'ElementsController@rangesliders')->name('elements.rangesliders');

/* Form elements */
Route::get('forms/formsbasic',                      'FormsController@formsbasic')->name('forms.formsbasic');
Route::get('forms/advanced',                        'FormsController@advanced')->name('forms.advanced');
Route::get('forms/validation',                      'FormsController@validation')->name('forms.validation');
Route::get('forms/wizard',                          'FormsController@wizard')->name('forms.wizard');
Route::get('forms/dragdropupload',                  'FormsController@dragdropupload')->name('forms.dragdropupload');
Route::get('forms/cropping',                        'FormsController@cropping')->name('forms.cropping');
Route::get('forms/summernote',                      'FormsController@summernote')->name('forms.summernote');
Route::get('forms/editors',                         'FormsController@editors')->name('forms.editors');
Route::get('forms/markdown',                        'FormsController@markdown')->name('forms.markdown');

/* Tables elements */
Route::get('tables/normal',                         'TablesController@normal')->name('tables.normal');
Route::get('tables/datatable',                      'TablesController@datatable')->name('tables.datatable');
Route::get('tables/editable',                       'TablesController@editable')->name('tables.editable');
Route::get('tables/tablecolor',                     'TablesController@tablecolor')->name('tables.tablecolor');
Route::get('tables/filter',                         'TablesController@filter')->name('tables.filter');
Route::get('tables/dragger',                        'TablesController@dragger')->name('tables.dragger');

/* Charts*/
Route::get('charts/apex',                           'ChartsController@apex')->name('charts.apex');
Route::get('charts/c_chart',                        'ChartsController@c_chart')->name('charts.c_chart');
Route::get('charts/morris',                         'ChartsController@morris')->name('charts.morris');
Route::get('charts/flot',                           'ChartsController@flot')->name('charts.flot');
Route::get('charts/chartjs',                        'ChartsController@chartjs')->name('charts.chartjs');
Route::get('charts/knob',                           'ChartsController@knob')->name('charts.knob');
Route::get('charts/sparkline',                      'ChartsController@sparkline')->name('charts.sparkline');

// widgets
Route::get('widgets/widget',                        'WidgetsController@widget')->name('widgets.widget');

// extra pages
Route::get('pages/blank',                           'PagesController@blank')->name('pages.blank');
Route::get('pages/searchresults',                   'PagesController@searchresults')->name('pages.searchresults');
Route::get('pages/profile',                         'PagesController@profile')->name('pages.profile');
Route::get('pages/invoices',                        'PagesController@invoices')->name('pages.invoices');
Route::get('pages/invoicesview',                    'PagesController@invoicesview')->name('pages.invoicesview');
Route::get('pages/gallery',                         'PagesController@gallery')->name('pages.gallery');
Route::get('pages/timeline',                        'PagesController@timeline')->name('pages.timeline');
Route::get('pages/pricing',                         'PagesController@pricing')->name('pages.pricing');
Route::get('pages/settings',                        'PagesController@settings')->name('pages.settings');


Route::get('map/vectormap',                        'MapController@vectormap')->name('map.vectormap');

Route::get('authentication/login',                  'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register',               'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/forgotpassword',         'AuthenticationController@forgotpassword')->name('authentication.forgotpassword');
Route::get('authentication/error404',               'AuthenticationController@error404')->name('authentication.error404');