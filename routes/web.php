<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('/home', ['name' => 'MarsTianZ', 'role' => 'Admin', 'help' => ['/aboutme', '/admin/bio-admin', '/admin/jurusan-admin', '/admin/pendidikan-admin', '/contact', '/product/{id}']]);
});

Route::get('/about', function () {
    return 'Hah kosong astaghfirullah al azim(astaghfirullah al azim), kerja lembur bagai Quda...'; 
});

Route::redirect('/help', '/');

Route::redirect('/bio-admin', '/admin/bio-admin');
Route::redirect('/jurusan-admin', '/admin/jurusan-admin');
Route::redirect('/pendidikan-admin', '/admin/pendidikan-admin');

// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::view('/contact', 'contact');

// Route::view('/contact', 'contact', ['name' => 'p']);

Route::get('/contact', function () {
    return view('contact', ['name' => 'Marsa Kristian', 'phone' => '081336.........', 'role' => 'Admin']);
});

// Route::view('/contact', 'contact', ['name' => 'Marsa Kristian', 'phone' => '081336.........']);

// Route::get('/aboutme', function () {
//     return redirect('/about');
// });

Route::redirect('/aboutme', '/about');

// Route::get('/product/{id}', function($id){
//     return 'ini product id = '.$id;
// });

Route::get('/product/{id}', function($id){
    return view('product.detail', ['id' => $id], ['name' => 'MarsTianZ', 'role' => 'Admin']);
});

Route::get('/admin', function () {
    return 'isi dengan : /admin/bio-admin,/admin/pendidikan-admin, /admin/jurusan-admin';
});


Route::prefix('admin')->group(function () {
    Route::get('/bio-admin', function() {
        return view('/bio', ['name' => 'MarsTianZ', 'role' => 'Admin']);
    });
    Route::get('/pendidikan-admin', function() {
        return view('/pendidikan', ['name' => 'MarsTianZ', 'role' => 'Admin']);
    });
    Route::get('/jurusan-admin', function() {
        return view('/jurusan', ['name' => 'MarsTianZ', 'role' => 'Admin']);
    });
});