<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Fronted\HomeController;
use App\Http\Controllers\Fronted\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SpecificationController;
use App\Http\Controllers\Backend\SpecificationValueController;


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


/**=========================admin======================================== */

Route::group(['middleware' => 'prevent-back-history'],function(){

        
    Route::group(['prefix' => 'admin'],function(){

        Route::get('/login',[AdminController::class,'LoginForm'])->name('login.form');
        Route::post('/store',[AdminController::class,'LoginStore'])->name('store.login');
        Route::get('/logout',[AdminController::class,'Logout'])->name('admin.logout');
    });  

    Route::group(['middleware' => 'adminAccess'],function(){
        

        Route::group(['prefix' => 'admin'],function(){

            Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard');       
            Route::get('/profile/view',[AdminController::class,'AdminProfile'])->name('admin.profile.view');
            Route::post('/reset/password', [AdminController::class, 'adminPasswordReset'])->name('admin.reset.password');
            Route::post('/profile/store', [AdminController::class, 'ProfileStore'])->name('admin.profile.store');
            Route::get('/create/adminuser',[AdminController::class,'CreateAdminuser'])->name('create.adminuser');
            Route::post('/store/adminuser', [AdminController::class, 'StoreAdminuser'])->name('store.adminuser'); 
            Route::get('/view/adminuser', [AdminController::class, 'ViewAdminuser'])->name('view.adminuser'); 
            Route::get('/edit/adminuser/{id}', [AdminController::class, 'EditAdminuser'])->name('edit.adminuser');
            Route::post('/update/adminuser/{id}', [AdminController::class, 'UpdateAdminuser'])->name('update.adminuser');             
            Route::get('/delete/adminuser/{id}', [AdminController::class, 'DeleteAdminuser'])->name('delete.adminuser');                            
        
        }); //prefix=admin
        
        Route::group(['prefix' => 'user'],function(){

            Route::get('/view/userlist', [UserProfileController::class, 'ViewUserList'])->name('view.userlist'); 
            Route::get('/toggle/{id}', [UserProfileController::class, 'IntroToggle'])->name('toggle.intro');
            Route::get('/edit/{id}', [UserProfileController::class, 'UserEdit'])->name('edit.user');
            Route::post('/update/{id}', [UserProfileController::class, 'UpdateUser'])->name('update.user');
            
            Route::get('/detail/{id}', [UserProfileController::class, 'DetailUser'])->name('detail.user');
            Route::get('/delete/{id}', [UserProfileController::class, 'DeleteUser'])->name('delete.user');
            

        }); //prefix=user  

        Route::group(['prefix' => 'category'],function(){
            Route::get('/add', [CategoryController::class, 'AddCategory'])->name('category.add'); 
            Route::post('/store', [CategoryController::class, 'StoreCategory'])->name('category.store'); 
            Route::get('/list', [CategoryController::class, 'ListCategory'])->name('category.list'); 
            Route::get('/edit/{id}', [CategoryController::class, 'EditCategory'])->name('category.edit'); 
            Route::post('/update/{id}', [CategoryController::class, 'UpdateCategory'])->name('category.update'); 
            Route::get('/delete/{id}', [CategoryController::class, 'DeleteCategory'])->name('category.delete'); 

        }); //prefix=category  
        
        Route::group(['prefix' => 'subcategory'],function(){
            Route::get('/add', [SubCategoryController::class, 'AddsubCategory'])->name('subcategory.add'); 
            Route::post('/store', [SubCategoryController::class, 'StoresubCategory'])->name('subcategory.store'); 
            Route::get('/list', [SubCategoryController::class, 'ListsubCategory'])->name('subcategory.list'); 
            Route::get('/edit/{id}', [SubCategoryController::class, 'EditsubCategory'])->name('subcategory.edit'); 
            Route::post('/update/{id}', [SubCategoryController::class, 'UpdatesubCategory'])->name('subcategory.update'); 
            Route::get('/delete/{id}', [SubCategoryController::class, 'DeletesubCategory'])->name('subcategory.delete'); 

        }); //prefix=subcategory  

        Route::group(['prefix' => 'brand'],function(){
            Route::get('/add', [BrandController::class, 'AddBrand'])->name('brand.add'); 
            Route::post('/store', [BrandController::class, 'StoreBrand'])->name('brand.store'); 
            Route::get('/list', [BrandController::class, 'ListBrand'])->name('brand.list'); 
            Route::get('/edit/{id}', [BrandController::class, 'EditBrand'])->name('brand.edit'); 
            Route::post('/update/{id}', [BrandController::class, 'UpdateBrand'])->name('brand.update'); 
            Route::get('/delete/{id}', [BrandController::class, 'DeleteBrand'])->name('brand.delete'); 

        }); //prefix=brand 

        Route::group(['prefix' => 'product'],function(){
            Route::get('/add', [ProductController::class, 'AddProduct'])->name('product.add'); 
            Route::get('/get/subcategory/{id}',[ProductController::class ,'GetSubcategory']); 
            Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product.store'); 
            Route::get('/list', [ProductController::class, 'ListProduct'])->name('product.list'); 
            Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit'); 
            Route::post('/update/{id}', [ProductController::class, 'UpdateProduct'])->name('product.update'); 
            Route::get('/delete/{id}', [ProductController::class, 'DeleteProduct'])->name('product.delete');
            Route::get('/detail/{id}', [ProductController::class, 'DetailProduct'])->name('product.detail');             
            Route::get('/toggle/{id}', [ProductController::class, 'ProductToggle'])->name('product.toggle');
            Route::get('/specification/{id}', [ProductController::class, 'ProductSpecification'])->name('product.specification'); 
            Route::post('/specification/store/', [ProductController::class, 'ProductSpecificationStore'])->name('product.specification.store');
            Route::post('/specification/list/', [ProductController::class, 'ProductSpecificationList'])->name('product.specification.list');
            
            
            

        }); //prefix=product 


        
        
    
    });//middleware=adminAccess





});//prevent-back-history

/**=========================admin======================================== */


/**======================frontend========================================== */


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'prevent-back-history'],function(){

    Route::group(['middleware' => 'auth'],function(){
            
        Route::get('/signout', [AuthenticatedSessionController::class, 'destroy'])->name('signout');
                
        
        Route::group(['prefix' => 'user'],function(){   

            Route::get('/profile_complete', [UserController::class, 'profileComplete'])->name('profile_complete');
            Route::post('/reset/password', [UserController::class, 'PasswordReset'])->name('user.reset.password'); 
            Route::post('/profile/store', [UserController::class, 'ProfileStore'])->name('profile.store'); 
                        
        });

        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified'
        ])->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
        });
       
    });//middleware=auth
    
});//prevent-back-history




Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



 
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();
 
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');