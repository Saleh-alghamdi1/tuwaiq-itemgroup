<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

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

Route::get('/', function () {
    return view('welcome');
    
})->name("welcome");

Route::get('/cpanel', function () {
    return view('dashboard.controlpanel');
    
})->name("controlpanel");

route::get('/itemgroup',[ItemsController::class,'GetItemsGroup'])->name('itemgroup');
route::post('/save',[ItemsController::class,'SaveGroupsItems'])->name('save');
route::get('/del/{x}',[ItemsController::class,'del'])->name('del');
route::get('/edit/{x}',[ItemsController::class,'Edit'])->name('edit');
route::post('/update',[ItemsController::class,'Update'])->name('update');



//الواجب الرابع 
route::get('/item',[ItemsController::class,'GetItem'])->name('item');
route::post('/save-item',[ItemsController::class,'SaveItem'])->name('save-item');
route::get('/Delitem/{x}',[ItemsController::class,'Delitem'])->name('Delitem');
route::get('/edititems/{x}',[ItemsController::class,'Edititem'])->name('Edititem');
route::post('/Updateitem',[ItemsController::class,'Updateitem'])->name('Updateitem');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
