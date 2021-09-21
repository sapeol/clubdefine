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
    return view('welcome');
});
 */


Route::get('/', 'App\Http\Controllers\ClubDefineGlobalController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\ClubDefineGlobalController@dashboard_1');
Route::get('/quickaccess', 'App\Http\Controllers\ClubDefineGlobalController@quickaccess');
Route::get('/manual-charges', 'App\Http\Controllers\ClubDefineGlobalController@manualcharges');
Route::get('/bulk-charges', 'App\Http\Controllers\ClubDefineGlobalController@bulk_charges');
Route::get('/guest-charges', 'App\Http\Controllers\ClubDefineGlobalController@guest_charges');
Route::get('/manual-payments', 'App\Http\Controllers\ClubDefineGlobalController@manual_payments');
Route::get('/app-profile', 'App\Http\Controllers\ClubDefineGlobalController@app_profile');
Route::get('/app-profile', 'App\Http\Controllers\ClubDefineGlobalController@app_profile');
Route::get('/reports', 'App\Http\Controllers\ClubDefineGlobalController@reports');
Route::get('/all-charges', 'App\Http\Controllers\ClubDefineGlobalController@all_charges');
Route::get('/fixed-charges', 'App\Http\Controllers\ClubDefineGlobalController@fixed_charges');
Route::get('/payment-reports', 'App\Http\Controllers\ClubDefineGlobalController@payment_reports');
Route::get('/service-revenue', 'App\Http\Controllers\ClubDefineGlobalController@service_revenue');
Route::get('/non-fixed-charges', 'App\Http\Controllers\ClubDefineGlobalController@non_fixed_charges');
Route::get('/all-users', 'App\Http\Controllers\ClubDefineGlobalController@all_users');
Route::get('/user-roles', 'App\Http\Controllers\ClubDefineGlobalController@user_roles');
Route::get('/adduser', 'App\Http\Controllers\ClubDefineGlobalController@adduser');
Route::get('/guest-user', 'App\Http\Controllers\ClubDefineGlobalController@guest_user');




Route::get('/app-profile', 'App\Http\Controllers\ClubDefineGlobalController@app_profile');
Route::get('/post-details', 'App\Http\Controllers\ClubDefineGlobalController@post_details');





Route::get('/form-editor-summernote', 'App\Http\Controllers\ClubDefineGlobalController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\ClubDefineGlobalController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\ClubDefineGlobalController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\ClubDefineGlobalController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\ClubDefineGlobalController@form_wizard');

Route::get('/page-error-400', 'App\Http\Controllers\ClubDefineGlobalController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\ClubDefineGlobalController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\ClubDefineGlobalController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\ClubDefineGlobalController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\ClubDefineGlobalController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\ClubDefineGlobalController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\ClubDefineGlobalController@page_lock_screen');
Route::get('/page-login', 'App\Http\Controllers\ClubDefineGlobalController@page_login');
Route::get('/page-register', 'App\Http\Controllers\ClubDefineGlobalController@page_register');
Route::get('/table-bootstrap-basic', 'App\Http\Controllers\ClubDefineGlobalController@table_bootstrap_basic');
Route::get('/table-datatable-basic', 'App\Http\Controllers\ClubDefineGlobalController@table_datatable_basic');
Route::get('/uc-lightgallery', 'App\Http\Controllers\ClubDefineGlobalController@uc_lightgallery');
Route::get('/uc-nestable', 'App\Http\Controllers\ClubDefineGlobalController@uc_nestable');
Route::get('/uc-noui-slider', 'App\Http\Controllers\ClubDefineGlobalController@uc_noui_slider');
Route::get('/uc-select2', 'App\Http\Controllers\ClubDefineGlobalController@uc_select2');

Route::get('/uc-toastr', 'App\Http\Controllers\ClubDefineGlobalController@uc_toastr');
Route::get('/ui-accordion', 'App\Http\Controllers\ClubDefineGlobalController@ui_accordion');

Route::get('/ui-badge', 'App\Http\Controllers\ClubDefineGlobalController@ui_badge');
Route::get('/ui-button', 'App\Http\Controllers\ClubDefineGlobalController@ui_button');
Route::get('/ui-button-group', 'App\Http\Controllers\ClubDefineGlobalController@ui_button_group');
Route::get('/ui-card', 'App\Http\Controllers\ClubDefineGlobalController@ui_card');
Route::get('/ui-carousel', 'App\Http\Controllers\ClubDefineGlobalController@ui_carousel');
Route::get('/ui-dropdown', 'App\Http\Controllers\ClubDefineGlobalController@ui_dropdown');

Route::get('/ui-list-group', 'App\Http\Controllers\ClubDefineGlobalController@ui_list_group');
Route::get('/ui-media-object', 'App\Http\Controllers\ClubDefineGlobalController@ui_media_object');
Route::get('/ui-modal', 'App\Http\Controllers\ClubDefineGlobalController@ui_modal');
Route::get('/ui-pagination', 'App\Http\Controllers\ClubDefineGlobalController@ui_pagination');
Route::get('/ui-popover', 'App\Http\Controllers\ClubDefineGlobalController@ui_popover');
Route::get('/ui-progressbar', 'App\Http\Controllers\ClubDefineGlobalController@ui_progressbar');
Route::get('/ui-tab', 'App\Http\Controllers\ClubDefineGlobalController@ui_tab');
Route::get('/ui-typography', 'App\Http\Controllers\ClubDefineGlobalController@ui_typography');
Route::get('/widget-basic', 'App\Http\Controllers\ClubDefineGlobalController@widget_basic');
