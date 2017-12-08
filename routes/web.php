<?php

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
});

Route::resource('products', 'ProductController');

Route::resource('posts', 'PostController');

Route::get('posts-list', 'PostController@listing');


// Route::get('/products',                 ['as' => 'products.index',      'uses' => 'productsController@index'    ]);
// Route::get('/products/create',          ['as' => 'products.create',     'uses' => 'productsController@create'   ]);
// Route::post('/products',                ['as' => 'products.store',      'uses' => 'productsController@store'    ]);
// Route::get('/products/{products}',      ['as' => 'products.show',       'uses' => 'productsController@show'     ]);
// Route::get('/products/{products}/edit', ['as' => 'products.edit',       'uses' => 'productsController@edit'     ]);
// Route::put('/products/{products}',      ['as' => 'products.update',     'uses' => 'productsController@update'   ]);
// Route::delete('/products/{products}',   ['as' => 'products.destroy',    'uses' => 'productsController@destroy'  ]);