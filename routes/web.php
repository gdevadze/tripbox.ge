<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLanguageController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminReportController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCarController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\User\UserCarController;
use App\Http\Controllers\User\UserOrderController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserFullCalenderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Services\GpsService;
use App\Services\GoogleMapService;
use GuzzleHttp\Client;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/tbc-pay/payment-callback', function(\Illuminate\Http\Request $request,App\Services\TbcPayService $tbcPayService){
    $data = $request->all();
    // $orderDetail = $tbcPayService->orderDetail($request->PaymentId);
    // return $orderDetail;
    $tbcPayService->transactionMark($data);
    return response(['message' => 'HTTP/1.1 200 Ok'], 200);
});

Route::get('/test', function(App\Services\TbcPayService $tbcPayService){
    $orderDetail = $tbcPayService->orderDetail('pQxEDFRsaeL2412814');
    return $orderDetail;
});

Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){
    Route::view('/contact','website.pages.contact');
    Route::view('/faq','website.pages.faq');
    Route::view('/about','website.pages.about');
    Route::view('/rules','website.pages.rules');
    Route::view('/privicy','website.pages.privicy');


    Route::view('/not-registered','templates.not-registered');
    Route::view('/registered','templates.registered');
    Route::view('/my-trip','templates.mytrip');
    Route::view('/hotel-inside','templates.hotelinside');

    Route::get('locale/{locale}', function ($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    })->name('locale');

    Route::view('/owner','templates.owner');
    Route::view('/ownerbooking','templates.ownbooking');
    Route::view('/chat','templates.chat');
    Route::view('/whole','templates.whole');

    Route::post('/car_detail', [CoreController::class,'carDetailRender'])->name('car.detail.render');

    Route::post('/places/search', [PlaceController::class, 'search'])->name('places.search');
    Route::get('/places/{placeId}/details', [PlaceController::class, 'details'])->name('places.details');
    Route::get('/places/{placeId}/photo/{photoReference}', [PlaceController::class, 'photo'])->name('places.photo');


    Route::view('/tripclub','website.pages.tripclub');


    Route::get('/discover-georgia',[CoreController::class,'discoverGeorgia'])->name('discover.georgia');
    Route::get('/become-partner',[CoreController::class,'becomePartner'])->name('register.partner');

    Route::get('/gps', function(GoogleMapService $googleMapService,GpsService $gpsService){
        $cars = \App\Models\Car::whereNotNull('gps_car_id')->get();
        foreach($cars as $car){
            $gps = $gpsService->car($car->gps_car_id);
            $lat = $gps['carStatus']['lat'];
            $lon = $gps['carStatus']['lon'];
            $car->update(['latitude' => $lat,'longitude' => $lon]);
        }
        // return $gpsService->car(2171149);
        // $address1 = \request()->city_from;
        // $address2 = \request()->city_to;
        
        // $coordinates1 = $googleMapService->geocodeAddress($address1);
        // $coordinates1 = implode(',',$coordinates1);
        // $coordinates2 = $googleMapService->geocodeAddress($address2);
        // $coordinates2 = implode(',',$coordinates2);
        // // Calculate distance between coordinates
        // $distance = $googleMapService->calculateDistance($coordinates1, $coordinates2);
        // return $distance;
    });

    Route::get('tbc_pay/{id}/{total?}',function(App\Services\TbcPayService $tbcPayService,$id,$total){
        $order = App\Models\Order::findOrFail($id);
        return $tbcPayService->setPaymentMethods([4,5,7])->for($order)->setCurrency('USD')->setAmount($total)->order();
    })->name('tbc_pay');

    

    Route::get('/', [CoreController::class,'index'])->name('index');
    Route::get('/search',[CoreController::class,'search'])->name('search');
    Route::get('/location_detail/{id}',[CoreController::class,'locationDetail'])->name('location.detail');
    Route::post('/get_models',[CoreController::class,'getModels'])->name('get_models');
    Route::get('/cart',[CartController::class,'cart'])->name('cart');
    Route::post('add_to_cart',[CartController::class,'addToCart'])->name('add-to-cart');
    Auth::routes();
    Route::post('/add-to-trip', [UserOrderController::class,'addToTrip'])->name('user.add-to-trip');
    Route::post('/view_trip_map', [UserOrderController::class,'viewTripMap'])->name('user.view-map');
    Route::post('/get_trips',[CoreController::class,'getTrips'])->name('get_trips');


    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware(['auth'])->group(function () {
        Route::group(['prefix' => 'user', 'as' => 'user.'], function () {

            Route::post('make_order',[UserOrderController::class,'makeOrder'])->name('make.order');
            Route::get('/orders/{status?}', [UserOrderController::class,'orders'])->name('orders');
            Route::get('/wishlist',[UserOrderController::class,'favorites'])->name('favorites');
            Route::get('/payments',[UserOrderController::class,'payments'])->name('payments');
            Route::post('/add-to-favorite', [UserOrderController::class,'addToFavorite'])->name('add-to-favorite');
            
            Route::post('/add-to-trip_detail', [UserOrderController::class,'addToTripDetail'])->name('add-to-trip.detail');
            Route::view('/detailed-cars','user.pages.cars.show');

            Route::get('/my_trips',[UserOrderController::class,'myTrips'])->name('my.trips');

            Route::get('/calendar',[UserFullCalenderController::class,'index'])->name('calendar.index');
            Route::post('/car_pause',[UserFullCalenderController::class,'carPause'])->name('calendar.car.pause');
            Route::post('/calendar',[UserFullCalenderController::class,'index'])->name('calendar.index');
            Route::post('/fullcalendarAjax',[UserFullCalenderController::class,'ajax'])->name('ajax');

            Route::get('/dashboard',[UserOrderController::class,'orders'])->name('dashboard');
    //        Route::get('/invited_users',[\App\Http\Controllers\HomeController::class,'invitedUsers'])->name('invited.users');
            Route::get('/transactions',[\App\Http\Controllers\User\UserTransactionController::class,'index'])->name('transactions');

            Route::get('checkout/', [CartController::class,'checkout'])->name('checkout');
            Route::post('confirm_order',[UserOrderController::class,'confirmOrder'])->name('confirm.order');

            Route::get('/change-password', [UserProfileController::class, 'changePassword'])->name('change.password');
            Route::post('/update-password', [UserProfileController::class, 'updatePassword'])->name('update.password');
            Route::post('/update-profile', [UserProfileController::class, 'updateProfile'])->name('update.profile');
            Route::get('/balance',[UserProfileController::class,'balance'])->name('balance');
            Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
            Route::post('/update_profile',[UserProfileController::class,'updateProfile'])->name('update.profile');

            Route::view('/faq','user.pages.faq');


            Route::post('/resendVerifyPhone', [UserProfileController::class, 'resendVerifiyPhone'])->name('resend.verify.phone');
            Route::post('/verifiyPhone', [UserProfileController::class, 'verifiyPhone'])->name('verify.phone');

            Route::group(['prefix' => 'orders','as' => 'orders.'], function (){
                Route::get('/show/{id}',[UserOrderController::class,'orderShow'])->name('show');
                Route::get('/info/{id}',[UserOrderController::class,'orderInfo'])->name('info');
                Route::post('/add_to_order',[UserOrderController::class,'addToOrder'])->name('add.to.order');
                Route::post('/car_rent_calculation', [UserOrderController::class,'carRentCalculation'])->name('car.rent.calculation');
                Route::post('/search_locations', [UserOrderController::class,'searchLocations'])->name('search.locations');
                Route::post('/update/{id}', [UserOrderController::class,'update'])->name('update');
                Route::post('/order_detail_render', [UserOrderController::class,'orderDetailRender'])->name('detail.render');
                Route::get('/edit/{id}',[UserOrderController::class,'edit'])->name('edit');
                Route::post('/update_order/{id}',[UserOrderController::class,'updateOrder'])->name('update.order');
                Route::post('/cancel_order',[UserOrderController::class,'cancelOrder'])->name('cancel');
                Route::get('/order_invoice/{id}',[UserOrderController::class,'orderInvoice'])->name('invoice');
            });

            Route::group(['prefix' => 'cars','as' => 'cars.'], function (){
                Route::get('/',[UserCarController::class,'index'])->name('index');
                Route::get('/create',[UserCarController::class,'create'])->name('create');
                Route::post('/store',[UserCarController::class,'store'])->name('store');
                Route::get('/edit/{id}',[UserCarController::class,'edit'])->name('edit');
                Route::post('/update/{id}',[UserCarController::class,'update'])->name('update');
                Route::get('/{id}/detail',[UserCarController::class,'show'])->name('show');
                Route::post('/my_car_location',[UserCarController::class,'myCarLocation'])->name('my.location');
                Route::post('/pause_car',[UserCarController::class,'pauseCar'])->name('pause');
                Route::post('/delete_car',[UserCarController::class,'deleteCar'])->name('delete');
                Route::post('/delete_image',[UserCarController::class,'deleteImage'])->name('delete.image');
                Route::post('/sortable_images',[UserCarController::class,'sortableImages'])->name('sortable.images');
            });
        });

        Route::group(['prefix' => 'admin','as' => 'admin.'], function (){
            Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

            Route::group(['prefix' => 'cars','as' => 'cars.'], function (){
                Route::get('/',[AdminCarController::class,'index'])->name('index');
                Route::post('/ajax',[AdminCarController::class,'getCarsForAjax'])->name('ajax');
                Route::get('/edit/{id}',[AdminCarController::class,'edit'])->name('edit');
                Route::post('/delete',[AdminProductController::class,'deleteProperty'])->name('delete');
                Route::post('/update/{id}',[AdminCarController::class,'update'])->name('update');
                Route::post('/set_gps',[AdminCarController::class,'setGps'])->name('set.gps');
                Route::post('/set_gps_car_id',[AdminCarController::class,'setGpsCarId'])->name('set.gps.car.id');
                Route::post('/delete_car',[AdminCarController::class,'deleteCar'])->name('delete.car');
            });

            Route::group(['prefix' => 'orders','as' => 'orders.'], function (){
                Route::get('/',[AdminOrderController::class,'index'])->name('index');
                Route::post('/ajax',[AdminOrderController::class,'getOrdersForAjax'])->name('ajax');
                Route::get('/create',[AdminOrderController::class,'create'])->name('create');
                Route::get('/show/{id}',[AdminOrderController::class,'show'])->name('show');
                Route::get('/edit/{id}',[AdminOrderController::class,'edit'])->name('edit');
                Route::post('{id}/update',[AdminOrderController::class,'update'])->name('update');
                Route::post('/store',[AdminOrderController::class,'store'])->name('store');
                Route::post('/delete_blog',[AdminOrderController::class,'deleteBlog'])->name('delete');
            });

            Route::group(['prefix' => 'blogs','as' => 'blogs.'], function (){
                Route::get('/',[AdminBlogController::class,'index'])->name('index');
                Route::post('/ajax',[AdminBlogController::class,'getBlogsForAjax'])->name('ajax');
                Route::get('/create',[AdminBlogController::class,'create'])->name('create');
                Route::get('/edit/{id}',[AdminBlogController::class,'edit'])->name('edit');
                Route::post('{id}/update',[AdminBlogController::class,'update'])->name('update');
                Route::post('/store',[AdminBlogController::class,'store'])->name('store');
                Route::post('/delete_blog',[AdminBlogController::class,'deleteBlog'])->name('delete');
            });

            Route::group(['prefix' => 'settings','as' => 'settings.'], function (){
                Route::group(['prefix' => 'pages','as' => 'pages.'], function (){
                    Route::get('/',[AdminPageController::class,'index'])->name('index');
                    Route::post('/ajax',[AdminPageController::class,'getPartnerCompaniesAjax'])->name('ajax');
                    Route::get('/create',[AdminPageController::class,'create'])->name('create');
                    Route::post('/store',[AdminPageController::class,'store'])->name('store');
                    Route::get('/edit/{id}',[AdminPageController::class,'edit'])->name('edit');
                    Route::post('/update/{id}',[AdminPageController::class,'update'])->name('update');
                    Route::post('/delete',[AdminPageController::class,'delete'])->name('delete');
                });

                Route::group(['prefix' => 'services','as' => 'services.'], function (){
                    Route::get('/',[AdminServiceController::class,'index'])->name('index');
                    Route::post('/ajax',[AdminServiceController::class,'getServicesForAjax'])->name('ajax');
                    Route::get('/create',[AdminServiceController::class,'create'])->name('create');
                    Route::post('/store',[AdminServiceController::class,'store'])->name('store');
                    Route::get('/edit/{id}',[AdminServiceController::class,'edit'])->name('edit');
                    Route::post('/update/{id}',[AdminServiceController::class,'update'])->name('update');
                    Route::post('/delete',[AdminServiceController::class,'delete'])->name('delete');
                });

                Route::group(['prefix' => 'languages', 'as' => 'languages.'], function () {
                    Route::get('/', [AdminLanguageController::class, 'index'])->name('index');
                    Route::get('/{code}/show', [AdminLanguageController::class, 'show'])->name('show');
                    Route::post('/show/ajax', [AdminLanguageController::class, 'languageJsonAjax'])->name('show.ajax');
                    Route::post('/create_language_json', [AdminLanguageController::class, 'createLanguageJson'])->name('create.language.json');
                    Route::post('/edit_language_json', [AdminLanguageController::class, 'editLanguageJson'])->name('edit.language.json');
                    Route::post('/store_language_json/{id}', [AdminLanguageController::class, 'storeLanguageJson'])->name('store.language.json');
                    Route::post('/update_language_json/{id}', [AdminLanguageController::class, 'updateLanguageJson'])->name('update.language.json');
                    Route::post('/delete_language_json', [AdminLanguageController::class, 'deleteLanguageJson'])->name('delete.language.json');

                    Route::get('/json_lang_import', [AdminLanguageController::class, 'jsonLangImport'])->name('json.lang.import');
                });

                Route::group(['prefix' => 'contact','as' => 'contact.'], function (){
                    Route::get('/',[AdminContactController::class,'index'])->name('index');
                    Route::post('/update',[AdminContactController::class,'update'])->name('update');
                });

                Route::group(['prefix' => 'about','as' => 'about.'], function (){
                    Route::get('/',[AdminAboutController::class,'index'])->name('index');
                    Route::post('/update',[AdminAboutController::class,'update'])->name('update');
                });
            });

            Route::group(['prefix' => 'reports','as' => 'reports.'], function (){
                Route::get('/properties',[AdminReportController::class,'index'])->name('properties');
            });

            Route::group(['prefix' => 'users','as' => 'users.'], function () {
                Route::get('/', [AdminUserController::class, 'index'])->name('index');
                Route::get('/create', [AdminUserController::class, 'create'])->name('create');
                Route::post('/store', [AdminUserController::class, 'store'])->name('store');
                Route::get('/{id}/edit', [AdminUserController::class, 'edit'])->name('edit');
                Route::patch('/{id}/update', [AdminUserController::class, 'update'])->name('update');
                Route::post('/users_ajax', [AdminUserController::class, 'getUsersForAjax'])->name('ajax');
                Route::post('/delete_user', [AdminUserController::class, 'deleteUser'])->name('delete.user');
                Route::post('/activate_user', [AdminUserController::class, 'activateUser'])->name('activate.user');
                Route::post('/render_relation_data', [AdminUserController::class, 'renderDisableUser'])->name('render.relation.data');
            
                Route::get('/impersonate/{id}', function ($id) {
                    $user = User::findOrFail($id);
                    Auth::user()->impersonate($user);
                    return redirect()->to(route('user.dashboard'));
                })->name('impersonate');
                Route::get('/impersonate_leave', function () {
                    Auth::user()->leaveImpersonation();
                    return redirect()->to(route('admin.dashboard'));
                })->name('impersonate.leave');
                Route::get('/test', function () {
                    $user = User::role(6)->get();
                    return $user;
                });
            });
        });
    });

});

