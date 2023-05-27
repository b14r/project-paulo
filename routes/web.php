<?php

use App\Http\Controllers\CancelSaleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientSaleController;
use App\Http\Controllers\MakeSaleController;
use App\Http\Controllers\ManageStockController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSaleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchPriceController;
use App\Http\Controllers\ShoppingCartController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testes', [PageController::class, 'index']);

Route::get('/register-product', [ProductController::class, 'index']);
Route::post('register-product', [ProductController::class, 'store']);

Route::get('/register-client', [ClientController::class, 'index']);
Route::post('/register-client', [ClientController::class, 'store']);

Route::get('/client-sale', [ClientSaleController::class, 'index']);
Route::post('/client-sale', [ClientSaleController::class, 'index'])->name('find-cpf');

Route::post('/product-sale', [ClientSaleController::class, 'store'])->name('product-sale');
Route::post('/find-product', [ProductSaleController::class, 'findProduct'])->name('find-product');
Route::post('/add-to-cart', [ProductSaleController::class, 'store'])->name('add-to-cart');

Route::post('/shopping-cart', [ShoppingCartController::class, 'listShoppingCart'])->name('shopping-cart');
Route::delete('/shopping-cart', [ShoppingCartController::class, 'delete'])->name('shopping-cart-delete');

Route::get('/search-price', [SearchPriceController::class, 'index']);
Route::post('/search-price', [SearchPriceController::class, 'index'])->name('search-price');

Route::post('/make-sale', [MakeSaleController::class, 'index'])->name('make-sale');
Route::post('/sale-end', [MakeSaleController::class, 'store'])->name('sale-end');

Route::get('/cancel-sale', [CancelSaleController::class, 'index'])->name('cancel-sale');
Route::delete('/cancel-sale', [CancelSaleController::class, 'delete'])->name('cancel-sale.delete');

Route::get('/manage-stock', [ManageStockController::class, 'index'])->name('manage-stock');
Route::post('/stock-down', [ManageStockController::class, 'down'])->name('stock-down');
Route::post('/stock-up', [ManageStockController::class, 'up'])->name('stock-up');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'view']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
