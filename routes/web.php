<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserProductController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SpecificationController;
use App\Http\Controllers\Backend\SpecificationValueController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\IntoController;





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

            Route::get('/description/{id}', [ProductController::class, 'ProductDescription'])->name('product.description'); 
            Route::post('/description/store/', [ProductController::class, 'ProductDescriptionStore'])->name('product.description.store');
            Route::post('/description/list/', [ProductController::class, 'ProductDescriptionList'])->name('product.description.list');
            Route::get('/description/edit/{id}', [ProductController::class, 'ProductDescriptionEdit'])->name('product.description.edit');
            Route::get('/description/delete/{id}', [ProductController::class, 'ProductDescriptionDelete'])->name('product.description.delete');

            Route::get('/des/add/', [ProductController::class, 'ProductDescriptionAdd'])->name('product.des.add');
            
            
            
        }); //prefix=product 


        //============service======

        route::prefix('service')->group(function(){

            Route::get('/create', [ServiceController::class, 'ServiceCreate'])->name('service.create');
            Route::post('/store', [ServiceController::class, 'ServiceStore'])->name('store.service');
            Route::get('/view', [ServiceController::class, 'ServiceView'])->name('service.view');
            Route::get('/edit/{id}', [ServiceController::class, 'ServiceEdit'])->name('service.edit');
            Route::post('/update/{id}', [ServiceController::class, 'ServiceUpdate'])->name('update.service');
            Route::get('/delete/{id}', [ServiceController::class, 'ServiceDelete'])->name('service.delete');
            Route::get('/intro/create', [ServiceController::class, 'ServiceIntroCreate'])->name('service.intro.create');
            Route::post('/intro/store', [ServiceController::class, 'ServiceIntroStore'])->name('store.service.intro');
            Route::get('/intro/view', [ServiceController::class, 'ServiceIntroView'])->name('service.intro.view');
            Route::get('/intro/edit/{id}', [ServiceController::class, 'ServiceIntroEdit'])->name('service.intro.edit');
            Route::post('/intro/update/{id}', [ServiceController::class, 'ServiceIntroUpdate'])->name('update.service.intro');
            Route::get('/intro/delete/{id}', [ServiceController::class, 'ServiceIntroDelete'])->name('service.intro.delete');

        });

          //============contact======


          route::prefix('contact')->group(function(){
            Route::get('/view', [ContactController::class, 'ContactView'])->name('contact.view');
            Route::get('/detail/{id}', [ContactController::class, 'ContactDetail'])->name('contact.detail');
            Route::get('/delete/{id}', [ContactController::class, 'ContactDelete'])->name('contact.delete');
            Route::get('/create/address', [ContactController::class, 'ContactAddressCreate'])->name('create.contact.address');
            Route::post('/store/address', [ContactController::class, 'ContactAddressStore'])->name('store.contact.address');
            Route::get('/view/address', [ContactController::class, 'ContactAddressView'])->name('contact.address.view');
            Route::get('/edit/address/{id}', [ContactController::class, 'ContactAddressEdit'])->name('contact.address.edit');
            Route::post('/update/address/{id}', [ContactController::class, 'ContactAddressUpdate'])->name('contact.address.update');
            Route::get('/delete/address/{id}', [ContactController::class, 'ContactAddressDelete'])->name('contact.address.delete');

            Route::get('/contact_intro/view', [ContactController::class, 'ContactIntroView'])->name('contact_intro.view');
            Route::get('/contact_intro/create', [ContactController::class, 'ContactIntroCreate'])->name('create.contact_intro');
            Route::post('/contact_intro/store', [ContactController::class, 'ContactIntroStore'])->name('store.contact_intro');




        });

        route::prefix('intro')->group(function(){
            Route::get('/create', [IntoController::class, 'CreateIntro'])->name('intro.create');
            Route::post('/store', [IntoController::class, 'IntroStore'])->name('store.intro');
            Route::get('/view', [IntoController::class, 'IntroView'])->name('view.intro');
            Route::get('/edit/{id}', [IntoController::class, 'IntroEdit'])->name('intro.edit');
            Route::post('/update/{id}', [IntoController::class, 'IntroUpdate'])->name('update.intro');
            Route::get('/delete/{id}', [IntoController::class, 'IntroDelete'])->name('intro.delete');
            Route::get('/active/{id}', [IntoController::class, 'IntroActive'])->name('active.intro');
            Route::get('/inactive/{id}', [IntoController::class, 'IntroInactive'])->name('inactive.intro');

            Route::get('/toggle/{id}', [IntoController::class, 'IntroToggle'])->name('toggle.intro');


        });


        
        
    
    });//middleware=adminAccess





});//prevent-back-history

/**=========================admin======================================== */


/**======================frontend========================================== */


// Route::get('/', function () {
//     return view('welcome');
// });

//===============public==part=====================================================================


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fronted/service/', [HomeController::class, 'FrontedService'])->name('fronted.service');
Route::get('/fronted/about/', [HomeController::class, 'FrontedAbout'])->name('fronted.about');


Route::get('/item/detail/{id}',[DetailController::class ,'ItemDetail'])->name('item.detail');
Route::get('/compare/product/{id}',[DetailController::class ,'CompareProduct'])->name('compare.product');
Route::get('/compare/search/product',[DetailController::class ,'CompareSearchProduct'])->name('compare.search.product');
Route::get('/compare/find2/product/{id}',[DetailController::class ,'CompareFind2Product'])->name('compare.find2.product');


Route::get('/search/specific/product',[SearchController::class ,'SearchSpecificProduct'])->name('search.specific.product');
Route::get('/search/category/product/{id}',[SearchController::class ,'SearchCategoryProduct'])->name('search.category.product');
Route::get('/search/brand/product/{id}',[SearchController::class ,'SearchBrandProduct'])->name('search.brand.product');









/*====================vendor==user==============part================================================*/
Route::get('reload-captcha', [UserController::class, 'reloadCaptcha']);

Route::group(['middleware' => 'prevent-back-history'],function(){

    Route::group(['middleware' => 'auth'],function(){
            
        Route::get('/signout', [AuthenticatedSessionController::class, 'destroy'])->name('signout');

        Route::get('/fronted/contact', [HomeController::class, 'FrontendContactView'])->name('fronted.contact');
        Route::post('/contact/store', [HomeController::class, 'ContactStore'])->name('contact.store');

                
        
        Route::group(['prefix' => 'user'],function(){   

            Route::get('/profile_complete', [UserController::class, 'profileComplete'])->name('profile_complete');
            Route::post('/reset/password', [UserController::class, 'PasswordReset'])->name('user.reset.password'); 
            Route::post('/profile/store', [UserController::class, 'ProfileStore'])->name('profile.store'); 

            //==================product==============================
            Route::get('/product/upload', [UserProductController::class, 'ProductUpload'])->name('user.product.upload');
            //Route::post('/get/other', [UserProductController::class, 'GetOther'])->name('user.get.other');
            
            Route::get('/get/subcategory/{id}',[UserProductController::class ,'UserGetSubcategory'])->name('user.get.subcategory');
            Route::post('/product/store', [UserProductController::class, 'UserProductStore'])->name('user.product.store');
            Route::get('/product/detail/{id}',[UserProductController::class ,'UserProductDetail'])->name('user.product.detail');
            Route::get('/product/list', [UserProductController::class, 'ProductList'])->name('user.product.list');
            Route::get('/product/edit/{id}',[UserProductController::class ,'UserProductEdit'])->name('user.product.edit');
            Route::post('/product/update/{id}',[UserProductController::class ,'UserProductUpdate'])->name('user.product.update');
            Route::get('/product/description/{id}', [UserProductController::class, 'UserProductDescription'])->name('user.product.description');
            Route::post('/product/description/list/', [UserProductController::class, 'UserProductDescriptionList'])->name('user.product.description.list');
            Route::post('/product/description/store/', [UserProductController::class, 'UserProductDescriptionStore'])->name('user.product.description.store');            
            Route::get('/product/description/edit/{id}', [UserProductController::class, 'UserProductDescriptionEdit'])->name('user.product.description.edit');
            Route::get('/product/description/delete/{id}', [UserProductController::class, 'UserProductDescriptionDelete'])->name('user.product.description.delete');


            
            
                        
            
                        
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
