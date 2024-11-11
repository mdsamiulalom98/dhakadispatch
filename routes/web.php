<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\FrontEnd\FrontendController;
use App\Http\Controllers\FrontEnd\MerchantController;
use App\Http\Controllers\FrontEnd\RiderController;
use App\Http\Controllers\FrontEnd\ParcelController;
use App\Http\Controllers\FrontEnd\PickupController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\BannerCategoryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CreatePageController;
use App\Http\Controllers\Admin\MerchantManageController;
use App\Http\Controllers\Admin\ExpenseCategoriesController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ServiceTypeController;
use App\Http\Controllers\Admin\DeliveryChargeController;
use App\Http\Controllers\Admin\DeliveryZoneController;
use App\Http\Controllers\Admin\ParcelStatusController;
use App\Http\Controllers\Admin\ParcelManageController;
use App\Http\Controllers\Admin\PickupManageController;
use App\Http\Controllers\Admin\RiderManageController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MissionVissionController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\ClientFeedbackController;
use App\Http\Controllers\Admin\PickupTypeController;
use App\Http\Controllers\Admin\WhychooseusController;

Auth::routes();
Route::get('/cc', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cleared!";
});

Route::group(['namespace' => 'FrontEnd', 'middleware' => ['check_refer','isloggedin']], function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
    Route::get('/tracking', [FrontendController::class, 'track'])->name('parcel.track');
    Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about_us');
    Route::get('/pricing', [FrontendController::class, 'pricing'])->name('pricing');
    Route::get('/cost-calculate', [FrontendController::class, 'cost_calculate'])->name('cost_calculate');
    Route::get('/coverage', [FrontendController::class, 'coverage'])->name('coverage');
    Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/search', [FrontendController::class, 'search'])->name('search');
    Route::get('/page/{slug}', [FrontendController::class, 'page'])->name('page');
    Route::get('parcel-create', [FrontendController::class, 'parcel_create']);
    Route::post('parcel/store', [FrontendController::class, 'parcel_store'])->name('guest.parcel.store');
});
Route::group(['namespace' => 'FrontEnd', 'middleware' => ['check_refer']], function () {
    Route::get('ajax-district', [FrontendController::class, 'ajax_district'])->name('ajax.districts');
    Route::get('ajax-area', [FrontendController::class, 'ajax_area'])->name('ajax.areas');
    Route::get('ajax-zone', [FrontendController::class, 'ajax_zone'])->name('ajax.zones');
    Route::post('/logout', [MerchantController::class, 'logout'])->name('merchant.logout');
    Route::get('/twofa-verify', [MerchantController::class, 'twofa_verify'])->name('merchant.twofactor');
    Route::post('/verify-account', [MerchantController::class, 'account_verify'])->name('merchant.account.verify');
    Route::post('/two-verify', [MerchantController::class, 'twoverify_verify'])->name('merchant.account.twoverify');
});
Route::group(['namespace' => 'FrontEnd', 'middleware' => ['check_refer','isloggedin']], function () {
    Route::get('/login', [MerchantController::class, 'login'])->name('merchant.login');
    Route::post('/signin', [MerchantController::class, 'signin'])->name('merchant.signin');
    Route::get('/register', [MerchantController::class, 'register'])->name('merchant.register');
    Route::post('/store', [MerchantController::class, 'store'])->name('merchant.store');
    Route::get('/verify', [MerchantController::class, 'verify'])->name('merchant.verify');

    Route::post('/resend-otp', [MerchantController::class, 'resendotp'])->name('merchant.resendotp');
    Route::get('/forgot-password', [MerchantController::class, 'forgot_password'])->name('merchant.forgot.password');
    Route::post('/forgot-verify', [MerchantController::class, 'forgot_verify'])->name('merchant.forgot.verify');
    Route::get('/forgot-password/reset', [MerchantController::class, 'forgot_reset'])->name('merchant.forgot.reset');
    Route::post('/forgot-password/store', [MerchantController::class, 'forgot_store'])->name('merchant.forgot.store');
    Route::post('/forgot-password/resendotp', [MerchantController::class, 'forgot_resend'])->name('merchant.forgot.resendotp');
});
// merchant auth
Route::group(['namespace' => 'FrontEnd', 'middleware' => ['merchant', 'check_refer']], function () {

    Route::get('/dashboard', [MerchantController::class, 'dashboard'])->name('merchant.dashboard');
    Route::get('/profile', [MerchantController::class, 'profile'])->name('merchant.profile');
    Route::get('/settings', [MerchantController::class, 'settings'])->name('merchant.settings');
    Route::post('/basic-update', [MerchantController::class, 'basic_update'])->name('merchant.basic_update');
    Route::post('/payment-method', [MerchantController::class, 'payment_method'])->name('merchant.payment_method');
    Route::get('/change-password', [MerchantController::class, 'change_pass'])->name('merchant.change_pass');
    Route::post('/password-update', [MerchantController::class, 'password_update'])->name('merchant.password_update');
    Route::get('/merchant/payment', [MerchantController::class, 'merchant_payment'])->name('merchant.parcel.payment');
    Route::get('/parcel/payable', [MerchantController::class, 'payable_parcel'])->name('merchant.parcel.payable');
    Route::post('/payment/request', [MerchantController::class, 'payment_request'])->name('merchant.payment.request');
    Route::get('/payment/invoice/{id}', [MerchantController::class, 'payment_invoice'])->name('merchant.payment.invoice');
    Route::get('/parcel/fraud-checker', [MerchantController::class, 'fraud_checker'])->name('merchant.parcel.fraud_checker');
    Route::get('/merchant/notice', [MerchantController::class, 'notice'])->name('merchant.notice');
    Route::get('/merchant/notification', [MerchantController::class, 'notification'])->name('merchant.notification');
    Route::get('/merchant/pricing', [MerchantController::class, 'pricing'])->name('merchant.parcel.pricing');
    Route::get('consignment-search', [MerchantController::class, 'consignment_search'])->name('merchant.consignment.search');

    // parcel manage
    Route::get('parcel/cost-calculate', [ParcelController::class, 'cost_calculate'])->name('merchant.parcel.cost_calculate');
    Route::get('parcel/manage/{slug}', [ParcelController::class, 'index'])->name('merchant.parcel.index');
    Route::get('parcel/create', [ParcelController::class, 'create'])->name('merchant.parcel.create');
     Route::get('/ajax-fraud-checker', [ParcelController::class, 'ajax_fraud'])->name('merchant.parcel.ajax_fraud');
    Route::post('parcel/save', [ParcelController::class, 'store'])->name('merchant.parcel.store');
    Route::get('parcel/bulk-upload', [ParcelController::class, 'bulk_upload'])->name('merchant.parcel.bulk_upload');
    Route::post('parcel/bulk-import', [ParcelController::class, 'bulk_import'])->name('merchant.parcel.bulk_import');
    Route::get('parcel/view/{id}', [ParcelController::class, 'view'])->name('merchant.parcel.view');
    Route::get('parcel/{id}/edit', [ParcelController::class, 'edit'])->name('merchant.parcel.edit');
    Route::post('parcel/update', [ParcelController::class, 'update'])->name('merchant.parcel.update');
    Route::post('parcel/destroy', [ParcelController::class, 'destroy'])->name('merchant.parcel.destroy');
    Route::get('parcel/label-print/{id}', [ParcelController::class, 'label_print'])->name('merchant.parcel.label_print');

    // pickup manage
    Route::get('pickup/create', [PickupController::class, 'create'])->name('merchant.pickup.create');
    Route::post('pickup/save', [PickupController::class, 'store'])->name('merchant.pickup.store');
    Route::get('pickup/manage/', [PickupController::class, 'index'])->name('merchant.pickup.index');
});

// rider route
Route::group(['namespace' => 'FrontEnd', 'middleware' => ['check_refer'],'prefix' => 'rider'], function () {
    Route::get('/login', [RiderController::class, 'login'])->name('rider.login');
    Route::post('/signin', [RiderController::class, 'signin'])->name('rider.signin');
    Route::get('/register', [RiderController::class, 'register'])->name('rider.register');
    Route::post('/store', [RiderController::class, 'store'])->name('rider.store');
    Route::get('/verify', [RiderController::class, 'verify'])->name('rider.verify');
    Route::post('/verify-account', [RiderController::class, 'account_verify'])->name('rider.account.verify');
    Route::post('/resend-otp', [RiderController::class, 'resendotp'])->name('rider.resendotp');
    Route::post('/logout', [RiderController::class, 'logout'])->name('rider.logout');
    Route::get('/forgot-password', [RiderController::class, 'forgot_password'])->name('rider.forgot.password');
    Route::post('/forgot-verify', [RiderController::class, 'forgot_verify'])->name('rider.forgot.verify');
    Route::get('/forgot-password/reset', [RiderController::class, 'forgot_reset'])->name('rider.forgot.reset');
    Route::post('/forgot-password/store', [RiderController::class, 'forgot_store'])->name('rider.forgot.store');
    Route::post('/forgot-password/resendotp', [RiderController::class, 'forgot_resend'])->name('rider.forgot.resendotp');
});
Route::group(['namespace' => 'FrontEnd', 'middleware' => ['rider', 'check_refer'],'prefix' => 'rider'], function () {

    Route::get('/dashboard', [RiderController::class, 'dashboard'])->name('rider.dashboard');
    Route::get('/profile', [RiderController::class, 'profile'])->name('rider.profile');
    Route::get('/settings', [RiderController::class, 'settings'])->name('rider.settings');
    Route::post('/basic-update', [RiderController::class, 'basic_update'])->name('rider.basic_update');
    Route::post('/payment-method', [RiderController::class, 'payment_method'])->name('rider.payment_method');
    Route::get('/change-password', [RiderController::class, 'change_pass'])->name('rider.change_pass');
    Route::post('/password-update', [RiderController::class, 'password_update'])->name('rider.password_update');
    Route::get('/rider/payment', [RiderController::class, 'rider_payment'])->name('rider.parcel.payment');
    Route::get('/parcel/payable', [RiderController::class, 'payable_parcel'])->name('rider.parcel.payable');
    Route::post('/payment/request', [RiderController::class, 'payment_request'])->name('rider.payment.request');
    Route::get('/payment/invoice/{id}', [RiderController::class, 'payment_invoice'])->name('rider.payment.invoice');
    Route::get('/parcel/fraud-checker', [RiderController::class, 'fraud_checker'])->name('rider.parcel.fraud_checker');
    Route::get('/merchant/notice', [RiderController::class, 'notice'])->name('rider.notice');
    Route::get('/merchant/notification', [RiderController::class, 'notification'])->name('rider.notification');
    Route::get('/merchant/pricing', [RiderController::class, 'pricing'])->name('rider.parcel.pricing');
    Route::get('consignment-search', [RiderController::class, 'consignment_search'])->name('rider.consignment.search');

    Route::get('parcel/cost-calculate', [RiderController::class, 'cost_calculate'])->name('rider.parcel.cost_calculate');
    Route::get('parcel/manage/{slug}', [RiderController::class, 'index'])->name('rider.parcel.index');
    Route::get('parcel/view/{id}', [RiderController::class, 'view'])->name('rider.parcel.view');
    Route::get('parcel/label-print/{id}', [RiderController::class, 'label_print'])->name('rider.parcel.label_print');
});

// unathenticate admin route
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['customer', 'ipcheck', 'check_refer']], function () {
    Route::get('locked', [DashboardController::class, 'locked'])->name('locked');
    Route::post('unlocked', [DashboardController::class, 'unlocked'])->name('unlocked');
});

// auth route
Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'lock', 'check_refer'], 'prefix' => 'admin'], function () {

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('change-password', [DashboardController::class, 'changepassword'])->name('change_password');
    Route::post('new-password', [DashboardController::class, 'newpassword'])->name('new_password');

    // users route
    Route::get('users/manage', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/save', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update', [UserController::class, 'update'])->name('users.update');
    Route::post('users/inactive', [UserController::class, 'inactive'])->name('users.inactive');
    Route::post('users/active', [UserController::class, 'active'])->name('users.active');
    Route::post('users/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    // roles
    Route::get('roles/manage', [RoleController::class, 'index'])->name('roles.index');
    Route::get('roles/{id}/show', [RoleController::class, 'show'])->name('roles.show');
    Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('roles/save', [RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::post('roles/update', [RoleController::class, 'update'])->name('roles.update');
    Route::post('roles/destroy', [RoleController::class, 'destroy'])->name('roles.destroy');

    // permissions route
    Route::get('permissions/manage', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('permissions/{id}/show', [PermissionController::class, 'show'])->name('permissions.show');
    Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('permissions/save', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('permissions/update', [PermissionController::class, 'update'])->name('permissions.update');
    Route::post('permissions/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');

     // parcel manage route
    Route::get('parcel/manage/{slug}', [ParcelManageController::class, 'index'])->name('admin.parcel.index');
    Route::get('parcel/view/{id}', [ParcelManageController::class, 'view'])->name('admin.parcel.view');
    Route::get('parcel-status', [ParcelManageController::class, 'parcel_status'])->name('admin.parcel.status');
     Route::get('parcel/rider-assign', [ParcelManageController::class, 'rider_assign'])->name('admin.parcel.rider_assign');

     // parcel manage route
    Route::get('pickup/manage/{slug}', [PickupManageController::class, 'index'])->name('admin.pickup.index');
    Route::get('pickup-status', [PickupManageController::class, 'pickup_status'])->name('admin.pickup.status');
     Route::get('pickup/rider-assign', [PickupManageController::class, 'rider_assign'])->name('admin.pickup.rider_assign');


    // merchant manage route
    Route::get('merchant/payment/{status}', [MerchantManageController::class, 'payment'])->name('merchants.payment');
    Route::get('merchant/invoice/{id}', [MerchantManageController::class, 'invoice'])->name('merchants.invoice');
    Route::post('merchant/payment/status', [MerchantManageController::class, 'payment_status'])->name('merchants.payment.status');
    Route::get('merchant/create', [MerchantManageController::class, 'create'])->name('merchants.create');
    Route::post('merchant/store', [MerchantManageController::class, 'store'])->name('merchants.store');
    Route::get('merchant/manage', [MerchantManageController::class, 'index'])->name('merchants.index');
    Route::get('merchant/{id}/edit', [MerchantManageController::class, 'edit'])->name('merchants.edit');
    Route::post('merchant/update', [MerchantManageController::class, 'update'])->name('merchants.update');
    Route::post('merchant/inactive', [MerchantManageController::class, 'inactive'])->name('merchants.inactive');
    Route::post('merchant/active', [MerchantManageController::class, 'active'])->name('merchants.active');
    Route::get('merchant/profile', [MerchantManageController::class, 'profile'])->name('merchants.profile');
    Route::post('merchant/adminlog', [MerchantManageController::class, 'adminlog'])->name('merchants.adminlog');
    Route::get('merchant/manual-payment', [MerchantManageController::class, 'menual_payment'])->name('merchants.menual_payment');
    Route::post('merchant/manual-payment/paid', [MerchantManageController::class, 'menual_payment_paid'])->name('merchants.menual_payment.paid');


    // merchant manage route
    Route::get('rider/payment/{status}', [RiderManageController::class, 'payment'])->name('riders.payment');
    Route::get('rider/invoice/{id}', [RiderManageController::class, 'invoice'])->name('riders.invoice');
    Route::post('rider/payment/status', [RiderManageController::class, 'payment_status'])->name('riders.payment.status');
    Route::get('rider/create', [RiderManageController::class, 'create'])->name('riders.create');
    Route::post('rider/store', [RiderManageController::class, 'store'])->name('riders.store');
    Route::get('rider/manage', [RiderManageController::class, 'index'])->name('riders.index');
    Route::get('rider/{id}/edit', [RiderManageController::class, 'edit'])->name('riders.edit');
    Route::post('rider/update', [RiderManageController::class, 'update'])->name('riders.update');
    Route::post('rider/inactive', [RiderManageController::class, 'inactive'])->name('riders.inactive');
    Route::post('rider/active', [RiderManageController::class, 'active'])->name('riders.active');
    Route::get('rider/profile', [RiderManageController::class, 'profile'])->name('riders.profile');
    Route::post('rider/adminlog', [RiderManageController::class, 'adminlog'])->name('riders.adminlog');
    Route::get('rider/manual-payment', [RiderManageController::class, 'menual_payment'])->name('riders.menual_payment');
    Route::post('rider/manual-payment/paid', [RiderManageController::class, 'menual_payment_paid'])->name('riders.menual_payment.paid');

    Route::get('reports/parcel', [ReportsController::class, 'parcel'])->name('admin.reports.parcel');
    Route::get('reports/payment', [ReportsController::class, 'payment'])->name('admin.reports.payment');
    Route::get('reports/expense', [ReportsController::class, 'expense'])->name('admin.reports.expense');
    Route::get('reports/loss-profit', [ReportsController::class, 'lossprofit'])->name('admin.reports.lossprofit');

    // expensecategories
    Route::get('expensecategories/manage', [ExpenseCategoriesController::class, 'index'])->name('expensecategories.index');
    Route::get('expensecategories/{id}/show', [ExpenseCategoriesController::class, 'show'])->name('expensecategories.show');
    Route::get('expensecategories/create', [ExpenseCategoriesController::class, 'create'])->name('expensecategories.create');
    Route::post('expensecategories/save', [ExpenseCategoriesController::class, 'store'])->name('expensecategories.store');
    Route::get('expensecategories/{id}/edit', [ExpenseCategoriesController::class, 'edit'])->name('expensecategories.edit');
    Route::post('expensecategories/update', [ExpenseCategoriesController::class, 'update'])->name('expensecategories.update');
    Route::post('expensecategories/inactive', [ExpenseCategoriesController::class, 'inactive'])->name('expensecategories.inactive');
    Route::post('expensecategories/active', [ExpenseCategoriesController::class, 'active'])->name('expensecategories.active');
    Route::post('expensecategories/destroy', [ExpenseCategoriesController::class, 'destroy'])->name('expensecategories.destroy');

    // expense
    Route::get('expense/manage', [ExpenseController::class, 'index'])->name('expense.index');
    Route::get('expense/{id}/show', [ExpenseController::class, 'show'])->name('expense.show');
    Route::get('expense/create', [ExpenseController::class, 'create'])->name('expense.create');
    Route::post('expense/save', [ExpenseController::class, 'store'])->name('expense.store');
    Route::get('expense/{id}/edit', [ExpenseController::class, 'edit'])->name('expense.edit');
    Route::post('expense/update', [ExpenseController::class, 'update'])->name('expense.update');
    Route::post('expense/inactive', [ExpenseController::class, 'inactive'])->name('expense.inactive');
    Route::post('expense/active', [ExpenseController::class, 'active'])->name('expense.active');
    Route::post('expense/destroy', [ExpenseController::class, 'destroy'])->name('expense.destroy');

    // notice route
    Route::get('notice/manage', [NoticeController::class, 'index'])->name('notice.index');
    Route::get('notice/create', [NoticeController::class, 'create'])->name('notice.create');
    Route::post('notice/save', [NoticeController::class, 'store'])->name('notice.store');
    Route::get('notice/{id}/edit', [NoticeController::class, 'edit'])->name('notice.edit');
    Route::post('notice/update', [NoticeController::class, 'update'])->name('notice.update');
    Route::post('notice/inactive', [NoticeController::class, 'inactive'])->name('notice.inactive');
    Route::post('notice/active', [NoticeController::class, 'active'])->name('notice.active');
    Route::post('notice/destroy', [NoticeController::class, 'destroy'])->name('notice.destroy');

    // service route
    Route::get('service/manage', [ServiceController::class, 'index'])->name('services.index');
    Route::get('service/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('service/save', [ServiceController::class, 'store'])->name('services.store');
    Route::get('service/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::post('service/update', [ServiceController::class, 'update'])->name('services.update');
    Route::post('service/inactive', [ServiceController::class, 'inactive'])->name('services.inactive');
    Route::post('service/active', [ServiceController::class, 'active'])->name('services.active');
    Route::post('service/destroy', [ServiceController::class, 'destroy'])->name('services.destroy');
    // pricing route
    Route::get('pricing/manage', [PricingController::class, 'index'])->name('pricing.index');
    Route::get('pricing/create', [PricingController::class, 'create'])->name('pricing.create');
    Route::post('pricing/save', [PricingController::class, 'store'])->name('pricing.store');
    Route::get('pricing/{id}/edit', [PricingController::class, 'edit'])->name('pricing.edit');
    Route::post('pricing/update', [PricingController::class, 'update'])->name('pricing.update');
    Route::post('pricing/inactive', [PricingController::class, 'inactive'])->name('pricing.inactive');
    Route::post('pricing/active', [PricingController::class, 'active'])->name('pricing.active');
    Route::post('pricing/destroy', [PricingController::class, 'destroy'])->name('pricing.destroy');

    // pickup type route
    Route::get('pickup-type/manage', [PickupTypeController::class, 'index'])->name('pickup_types.index');
    Route::get('pickup-type/create', [PickupTypeController::class, 'create'])->name('pickup_types.create');
    Route::post('pickup-type/save', [PickupTypeController::class, 'store'])->name('pickup_types.store');
    Route::get('pickup-type/{id}/edit', [PickupTypeController::class, 'edit'])->name('pickup_types.edit');
    Route::post('pickup-type/update', [PickupTypeController::class, 'update'])->name('pickup_types.update');
    Route::post('pickup-type/inactive', [PickupTypeController::class, 'inactive'])->name('pickup_types.inactive');
    Route::post('pickup-type/active', [PickupTypeController::class, 'active'])->name('pickup_types.active');
    Route::post('pickup-type/destroy', [PickupTypeController::class, 'destroy'])->name('pickup_types.destroy');

    // client route
    Route::get('clients/manage', [ClientController::class, 'index'])->name('clients.index');
    Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('clients/save', [ClientController::class, 'store'])->name('clients.store');
    Route::get('clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::post('clients/update', [ClientController::class, 'update'])->name('clients.update');
    Route::post('clients/inactive', [ClientController::class, 'inactive'])->name('clients.inactive');
    Route::post('clients/active', [ClientController::class, 'active'])->name('clients.active');
    Route::post('clients/destroy', [ClientController::class, 'destroy'])->name('clients.destroy');

    Route::get('faq/manage', [FaqController::class, 'index'])->name('faq.index');
    Route::get('faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('faq/save', [FaqController::class, 'store'])->name('faq.store');
    Route::get('faq/{id}/edit', [FaqController::class, 'edit'])->name('faq.edit');
    Route::post('faq/update', [FaqController::class, 'update'])->name('faq.update');
    Route::post('faq/inactive', [FaqController::class, 'inactive'])->name('faq.inactive');
    Route::post('faq/active', [FaqController::class, 'active'])->name('faq.active');
    Route::post('faq/destroy', [FaqController::class, 'destroy'])->name('faq.destroy');



    // district routes
    Route::get('districts/manage', [DistrictController::class, 'index'])->name('districts.index');
    Route::get('districts/{id}/show', [DistrictController::class, 'show'])->name('districts.show');
    Route::get('districts/create', [DistrictController::class, 'create'])->name('districts.create');
    Route::post('districts/save', [DistrictController::class, 'store'])->name('districts.store');
    Route::get('districts/{id}/edit', [DistrictController::class, 'edit'])->name('districts.edit');
    Route::post('districts/update', [DistrictController::class, 'update'])->name('districts.update');
    Route::post('districts/inactive', [DistrictController::class, 'inactive'])->name('districts.inactive');
    Route::post('districts/active', [DistrictController::class, 'active'])->name('districts.active');
    Route::post('districts/destroy', [DistrictController::class, 'destroy'])->name('districts.destroy');

    // cities
    Route::get('cities/manage', [CityController::class, 'index'])->name('cities.index');
    Route::get('cities/{id}/show', [CityController::class, 'show'])->name('cities.show');
    Route::get('cities/create', [CityController::class, 'create'])->name('cities.create');
    Route::post('cities/save', [CityController::class, 'store'])->name('cities.store');
    Route::get('cities/{id}/edit', [CityController::class, 'edit'])->name('cities.edit');
    Route::post('cities/update', [CityController::class, 'update'])->name('cities.update');
    Route::post('cities/inactive', [CityController::class, 'inactive'])->name('cities.inactive');
    Route::post('cities/active', [CityController::class, 'active'])->name('cities.active');
    Route::post('cities/destroy', [CityController::class, 'destroy'])->name('cities.destroy');

     // district routes
    Route::get('banks/manage', [BankController::class, 'index'])->name('banks.index');
    Route::get('banks/{id}/show', [BankController::class, 'show'])->name('banks.show');
    Route::get('banks/create', [BankController::class, 'create'])->name('banks.create');
    Route::post('banks/save', [BankController::class, 'store'])->name('banks.store');
    Route::get('banks/{id}/edit', [BankController::class, 'edit'])->name('banks.edit');
    Route::post('banks/update', [BankController::class, 'update'])->name('banks.update');
    Route::post('banks/inactive', [BankController::class, 'inactive'])->name('banks.inactive');
    Route::post('banks/active', [BankController::class, 'active'])->name('banks.active');
    Route::post('banks/destroy', [BankController::class, 'destroy'])->name('banks.destroy');


    // settings route
    Route::get('settings/manage', [GeneralSettingController::class, 'index'])->name('settings.index');
    Route::get('settings/create', [GeneralSettingController::class, 'create'])->name('settings.create');
    Route::post('settings/save', [GeneralSettingController::class, 'store'])->name('settings.store');
    Route::get('settings/{id}/edit', [GeneralSettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings/update', [GeneralSettingController::class, 'update'])->name('settings.update');
    Route::post('settings/inactive', [GeneralSettingController::class, 'inactive'])->name('settings.inactive');
    Route::post('settings/active', [GeneralSettingController::class, 'active'])->name('settings.active');
    Route::post('settings/destroy', [GeneralSettingController::class, 'destroy'])->name('settings.destroy');

    // settings route
    Route::get('social-media/manage', [SocialMediaController::class, 'index'])->name('socialmedias.index');
    Route::get('social-media/create', [SocialMediaController::class, 'create'])->name('socialmedias.create');
    Route::post('social-media/save', [SocialMediaController::class, 'store'])->name('socialmedias.store');
    Route::get('social-media/{id}/edit', [SocialMediaController::class, 'edit'])->name('socialmedias.edit');
    Route::post('social-media/update', [SocialMediaController::class, 'update'])->name('socialmedias.update');
    Route::post('social-media/inactive', [SocialMediaController::class, 'inactive'])->name('socialmedias.inactive');
    Route::post('social-media/active', [SocialMediaController::class, 'active'])->name('socialmedias.active');
    Route::post('social-media/destroy', [SocialMediaController::class, 'destroy'])->name('socialmedias.destroy');

    // contact route
    Route::get('contact/manage', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('contact/save', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::post('contact/update', [ContactController::class, 'update'])->name('contact.update');
    Route::post('contact/inactive', [ContactController::class, 'inactive'])->name('contact.inactive');
    Route::post('contact/active', [ContactController::class, 'active'])->name('contact.active');
    Route::post('contact/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');

    // banner category route
    Route::get('banner-category/manage', [BannerCategoryController::class, 'index'])->name('banner_category.index');
    Route::get('banner-category/create', [BannerCategoryController::class, 'create'])->name('banner_category.create');
    Route::post('banner-category/save', [BannerCategoryController::class, 'store'])->name('banner_category.store');
    Route::get('banner-category/{id}/edit', [BannerCategoryController::class, 'edit'])->name('banner_category.edit');
    Route::post('banner-category/update', [BannerCategoryController::class, 'update'])->name('banner_category.update');
    Route::post('banner-category/inactive', [BannerCategoryController::class, 'inactive'])->name('banner_category.inactive');
    Route::post('banner-category/active', [BannerCategoryController::class, 'active'])->name('banner_category.active');
    Route::post('banner-category/destroy', [BannerCategoryController::class, 'destroy'])->name('banner_category.destroy');

    // banner  route
    Route::get('banner/manage', [BannerController::class, 'index'])->name('banners.index');
    Route::get('banner/create', [BannerController::class, 'create'])->name('banners.create');
    Route::post('banner/save', [BannerController::class, 'store'])->name('banners.store');
    Route::get('banner/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
    Route::post('banner/update', [BannerController::class, 'update'])->name('banners.update');
    Route::post('banner/inactive', [BannerController::class, 'inactive'])->name('banners.inactive');
    Route::post('banner/active', [BannerController::class, 'active'])->name('banners.active');
    Route::post('banner/destroy', [BannerController::class, 'destroy'])->name('banners.destroy');

    // contact route
    Route::get('page/manage', [CreatePageController::class, 'index'])->name('pages.index');
    Route::get('page/create', [CreatePageController::class, 'create'])->name('pages.create');
    Route::post('page/save', [CreatePageController::class, 'store'])->name('pages.store');
    Route::get('page/{id}/edit', [CreatePageController::class, 'edit'])->name('pages.edit');
    Route::post('page/update', [CreatePageController::class, 'update'])->name('pages.update');
    Route::post('page/inactive', [CreatePageController::class, 'inactive'])->name('pages.inactive');
    Route::post('page/active', [CreatePageController::class, 'active'])->name('pages.active');
    Route::post('page/destroy', [CreatePageController::class, 'destroy'])->name('pages.destroy');

    Route::get('about/manage', [AboutController::class, 'index'])->name('abouts.index');
    Route::get('about/create', [AboutController::class, 'create'])->name('abouts.create');
    Route::post('about/save', [AboutController::class, 'store'])->name('abouts.store');
    Route::get('about/{id}/edit', [AboutController::class, 'edit'])->name('abouts.edit');
    Route::post('about/update', [AboutController::class, 'update'])->name('abouts.update');
    Route::post('about/inactive', [AboutController::class, 'inactive'])->name('abouts.inactive');
    Route::post('about/active', [AboutController::class, 'active'])->name('abouts.active');
    Route::post('about/destroy', [AboutController::class, 'destroy'])->name('abouts.destroy');

    Route::get('counter/manage', [CounterController::class, 'index'])->name('counters.index');
    Route::get('counter/create', [CounterController::class, 'create'])->name('counters.create');
    Route::post('counter/save', [CounterController::class, 'store'])->name('counters.store');
    Route::get('counter/{id}/edit', [CounterController::class, 'edit'])->name('counters.edit');
    Route::post('counter/update', [CounterController::class, 'update'])->name('counters.update');
    Route::post('counter/inactive', [CounterController::class, 'inactive'])->name('counters.inactive');
    Route::post('counter/active', [CounterController::class, 'active'])->name('counters.active');
    Route::post('counter/destroy', [CounterController::class, 'destroy'])->name('counters.destroy');

    Route::get('client-feedback/manage', [ClientFeedbackController::class, 'index'])->name('clientfeedback.index');
    Route::get('client-feedback/create', [ClientFeedbackController::class, 'create'])->name('clientfeedback.create');
    Route::post('client-feedback/save', [ClientFeedbackController::class, 'store'])->name('clientfeedback.store');
    Route::get('client-feedback/{id}/edit', [ClientFeedbackController::class, 'edit'])->name('clientfeedback.edit');
    Route::post('client-feedback/update', [ClientFeedbackController::class, 'update'])->name('clientfeedback.update');
    Route::post('client-feedback/inactive', [ClientFeedbackController::class, 'inactive'])->name('clientfeedback.inactive');
    Route::post('client-feedback/active', [ClientFeedbackController::class, 'active'])->name('clientfeedback.active');
    Route::post('client-feedback/destroy', [ClientFeedbackController::class, 'destroy'])->name('clientfeedback.destroy');


    Route::get('missionvision/manage', [MissionVissionController::class, 'index'])->name('missionvission.index');
    Route::get('missionvision/create', [MissionVissionController::class, 'create'])->name('missionvission.create');
    Route::post('missionvision/save', [MissionVissionController::class, 'store'])->name('missionvission.store');
    Route::get('missionvision/{id}/edit', [MissionVissionController::class, 'edit'])->name('missionvission.edit');
    Route::post('missionvision/update', [MissionVissionController::class, 'update'])->name('missionvission.update');
    Route::post('missionvision/inactive', [MissionVissionController::class, 'inactive'])->name('missionvission.inactive');
    Route::post('missionvision/active', [MissionVissionController::class, 'active'])->name('missionvission.active');
    Route::post('missionvision/destroy', [MissionVissionController::class, 'destroy'])->name('missionvission.destroy');

    Route::get('parcelstatus/manage', [ParcelStatusController::class, 'index'])->name('parcelstatus.index');
    Route::get('parcelstatus/{id}/show', [ParcelStatusController::class, 'show'])->name('parcelstatus.show');
    Route::get('parcelstatus/create', [ParcelStatusController::class, 'create'])->name('parcelstatus.create');
    Route::post('parcelstatus/save', [ParcelStatusController::class, 'store'])->name('parcelstatus.store');
    Route::get('parcelstatus/{id}/edit', [ParcelStatusController::class, 'edit'])->name('parcelstatus.edit');
    Route::post('parcelstatus/update', [ParcelStatusController::class, 'update'])->name('parcelstatus.update');
    Route::post('parcelstatus/inactive', [ParcelStatusController::class, 'inactive'])->name('parcelstatus.inactive');
    Route::post('parcelstatus/active', [ParcelStatusController::class, 'active'])->name('parcelstatus.active');
    Route::post('parcelstatus/destroy', [ParcelStatusController::class, 'destroy'])->name('parcelstatus.destroy');


    Route::get('deliveryzone/manage', [DeliveryZoneController::class, 'index'])->name('deliveryzone.index');
    Route::get('deliveryzone/{id}/show', [DeliveryZoneController::class, 'show'])->name('deliveryzone.show');
    Route::get('deliveryzone/create', [DeliveryZoneController::class, 'create'])->name('deliveryzone.create');
    Route::post('deliveryzone/save', [DeliveryZoneController::class, 'store'])->name('deliveryzone.store');
    Route::get('deliveryzone/{id}/edit', [DeliveryZoneController::class, 'edit'])->name('deliveryzone.edit');
    Route::post('deliveryzone/update', [DeliveryZoneController::class, 'update'])->name('deliveryzone.update');
    Route::post('deliveryzone/inactive', [DeliveryZoneController::class, 'inactive'])->name('deliveryzone.inactive');
    Route::post('deliveryzone/active', [DeliveryZoneController::class, 'active'])->name('deliveryzone.active');
    Route::post('deliveryzone/destroy', [DeliveryZoneController::class, 'destroy'])->name('deliveryzone.destroy');

    Route::get('servicetype/manage', [ServiceTypeController::class, 'index'])->name('servicetype.index');
    Route::get('servicetype/{id}/show', [ServiceTypeController::class, 'show'])->name('servicetype.show');
    Route::get('servicetype/create', [ServiceTypeController::class, 'create'])->name('servicetype.create');
    Route::post('servicetype/save', [ServiceTypeController::class, 'store'])->name('servicetype.store');
    Route::get('servicetype/{id}/edit', [ServiceTypeController::class, 'edit'])->name('servicetype.edit');
    Route::post('servicetype/update', [ServiceTypeController::class, 'update'])->name('servicetype.update');
    Route::post('servicetype/inactive', [ServiceTypeController::class, 'inactive'])->name('servicetype.inactive');
    Route::post('servicetype/active', [ServiceTypeController::class, 'active'])->name('servicetype.active');
    Route::post('servicetype/destroy', [ServiceTypeController::class, 'destroy'])->name('servicetype.destroy');

    Route::get('delivery-charge/manage', [DeliveryChargeController::class, 'index'])->name('deliverycharge.index');
    Route::get('delivery-charge/{id}/show', [DeliveryChargeController::class, 'show'])->name('deliverycharge.show');
    Route::get('delivery-charge/create', [DeliveryChargeController::class, 'create'])->name('deliverycharge.create');
    Route::post('delivery-charge/save', [DeliveryChargeController::class, 'store'])->name('deliverycharge.store');
    Route::get('delivery-charge/{id}/edit', [DeliveryChargeController::class, 'edit'])->name('deliverycharge.edit');
    Route::post('delivery-charge/update', [DeliveryChargeController::class, 'update'])->name('deliverycharge.update');
    Route::post('delivery-charge/inactive', [DeliveryChargeController::class, 'inactive'])->name('deliverycharge.inactive');
    Route::post('delivery-charge/active', [DeliveryChargeController::class, 'active'])->name('deliverycharge.active');
    Route::post('delivery-charge/destroy', [DeliveryChargeController::class, 'destroy'])->name('deliverycharge.destroy');

    Route::get('why-choose-us/manage', [WhychooseusController::class, 'index'])->name('whychooseus.index');
    Route::get('why-choose-us/{id}/show', [WhychooseusController::class, 'show'])->name('whychooseus.show');
    Route::get('why-choose-us/create', [WhychooseusController::class, 'create'])->name('whychooseus.create');
    Route::post('why-choose-us/save', [WhychooseusController::class, 'store'])->name('whychooseus.store');
    Route::get('why-choose-us/{id}/edit', [WhychooseusController::class, 'edit'])->name('whychooseus.edit');
    Route::post('why-choose-us/update', [WhychooseusController::class, 'update'])->name('whychooseus.update');
    Route::post('why-choose-us/inactive', [WhychooseusController::class, 'inactive'])->name('whychooseus.inactive');
    Route::post('why-choose-us/active', [WhychooseusController::class, 'active'])->name('whychooseus.active');
    Route::post('why-choose-us/destroy', [WhychooseusController::class, 'destroy'])->name('whychooseus.destroy');
});
