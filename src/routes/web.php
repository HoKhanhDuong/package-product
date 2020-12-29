<?php

Route::group(["namespace" => "Duong\Product\Http\Controller", "middleware" => ["web"]], function() {

    Route::get('/admin/remove_product', [
        'as'=>'remove_product',
        'uses'=>'ProductController@getRemoveProduct'
    ]);
    
    Route::get('/admin/add_product', [
        'as'=>'add_product',
        'uses'=>'ProductController@getAddProduct'
    ]);
    
    Route::post('/admin/add_product', [
        'as'=>'add_product',
        'uses'=>'ProductController@postAddProduct'
    ]);
    
    Route::get('/admin/edit_product', [
        'as'=>'edit_product',
        'uses'=>'ProductController@getEditProduct'
    ]);
    
    Route::post('/admin/edit_product', [
        'as'=>'edit_product',
        'uses'=>'ProductController@postEditProduct'
    ]);

    Route::get('/home/product', [
        'as'=>'product',
        'uses'=>'SearchController@getAllProduct'
    ]);
    
    Route::get('/home/single', [
        'as'=>'single',
        'uses'=>'SearchController@getProduct'
    ]);
    
    Route::post('/home/search', [
        'as'=>'search',
        'uses'=>'SearchController@postSearch'
    ]);
    
    Route::get('/home/type',[
        'as'=>'type',
        'uses'=>'SearchController@getProductsType'
    ]);
    
    Route::get('/home/cost',[
        'as'=>'cost',
        'uses'=>'SearchController@getProductsCost'
    ]);

});