<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class,'index'])->name('home');



Route::view('/about', 'about')->name('about');




// Route::controller(CarController::class)->group(function(){
//     Route::get('/car',[CarController::class, 'index']);
//     Route::get('/my-cars',[CarController::class, 'index']);
// });


// // biar nanti routernya bisa di akses di controller
// Route::get('/car/invokable', CarController::class);
// Route::get('/car', [CarController::class, 'index']);


















/* buat nanti contoh router 404
Route::fallback(function () {
    return 'fallback';
});
*/



// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return '/admin/users';
//     });
// });

// Route::name('admin')->group(function () {
//     Route::get('/users', function () {
//         return '/users';
//     })->name('users');
// });


// Route::get('/user/profile', function () {

// })->name('profile');


// Route::get('/current-user', function () {
//     // return  redirect()->route('profile');

//     return to_route('profile');
// });

// // Named Routes with Parameters

// Route::get("/{lang}/product/{id}", function (string $lang, string $id) {
    
// })->name("product.view");




/* Route Optional Parameter
Route::get('/product/{category?}', function(string $category = null )
{
    return "Product from category=$category";
});
*/

/* Route Parameter Validation
Route::get('/user/{username}', function (string $username) {
    // biar username harus huruf kecil
})->where('username','[a-z]+');


Route::get("{lang}/product/{id}", function (string $lang, string $id) {
    // biar id harus angka dan minimal 4 angka
})->where(['lang' => '[a-z]{2}', 'id' => '\d{4,}']);

Route::get('/search/{search}', function (string $search) {
    // biar search harus string    
return $search;
})->where('search', '.+');


Route::get('/product/{id}', function (string $id) {
    // biar id harus angka    
return "Product with id=$id";
})->WhereNumber("id");
*/


/*view registered Routes with artisan
    php artisan route:list
    php artisan route:list -v
    php artisan route:list --except-vendor
    php artisan route:list --only-vendor
    php artisan route:list --path=api
*/

/*
php artisan route:cache
php artisan route:clear
*/