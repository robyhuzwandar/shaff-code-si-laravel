<?php
Route::group(['prefix' =>'admin', 'middleware' => 'auth'], function (){
    
    Route::get('/', 'HomeController@dashboard')->name('welcome');
    //post
    Route::get('/post/', 'PostController@index')->name('post.index');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/create', 'PostController@store')->name('post.store');
    Route::patch('/post/{id}/edit', 'PostController@update')->name('post.update');
    Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
    Route::delete('/post/{id}/delete', 'PostController@delete')->name('post.destroy');

    //category
    Route::get('/category/', 'CategoryController@index')->name('category.index');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/{id}/edit', 'CategoryController@update')->name('category.update');
    Route::delete('/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');


    //event
    Route::get('/event/', 'EventController@index')->name('event.index');
    Route::get('/event/create', 'EventController@create')->name('event.create');
    Route::post('/event/store', 'EventController@store')->name('event.store');
    Route::patch('/event/{id}/edit', 'EventController@update')->name('event.update');
    Route::get('/event/{id}/edit', 'EventController@edit')->name('event.edit');
    Route::delete('/event/{id}/delete', 'EventController@destroy')->name('event.destroy');

    //community
    Route::get('/community/', 'CommunityController@index')->name('community.index');
    Route::get('/community/create', 'CommunityController@create')->name('community.create');
    Route::post('/community/store', 'CommunityController@store')->name('community.store');
    Route::patch('/community/{id}/edit', 'CommunityController@update')->name('community.update');
    Route::get('/community/{id}/edit', 'CommunityController@edit')->name('community.edit');
    Route::delete('/community/{id}/delete', 'CommunityController@destroy')->name('community.destroy');


    //member
    Route::get('/member/', 'MemberController@index')->name('member.index');
    Route::get('/member/create', 'MemberController@create')->name('member.create');
    Route::post('/member/store', 'MemberController@store')->name('member.store');
    Route::patch('/member/{id}/edit', 'MemberController@update')->name('member.update');
    Route::get('/member/{id}/edit', 'MemberController@edit')->name('member.edit');
    Route::delete('/member/{id}/delete', 'MemberController@destroy')->name('member.destroy');

        Route::get('/profile', 'HomeController@profile')->name('profile');
});

//root
Route::get('/', 'HomeController@main')->name('frontend.main');
Route::get('/footartikel', 'HomeController@main')->name('frontend.main');

//event
Route::get('/eventmain', 'HomeController@eventmain')->name('frontend.event_main');
Route::get('/pencarianevent', 'HomeController@pencarianevent')->name('frontend.pencarian_event');
Route::get('/eventdetail/{id}', 'HomeController@eventdetail')->name('frontend.event_detail');

//artikel
Route::get('/artikelmain', 'HomeController@artikelmain')->name('frontend.artikel_main');
Route::get('/pencarianartikel', 'HomeController@pencarianartikel')->name('frontend.pencarian_artikel');
Route::get('/artikeldetail/{id}', 'HomeController@artikeldetail')->name('frontend.artikel_detail');

//community
Route::get('/communitymain', 'HomeController@communitymain')->name('frontend.community_main');
Route::get('/pencariancommunity', 'HomeController@pencariancommunity')->name('frontend.pencarian_community');
Route::get('/communitydetail/{id}', 'HomeController@communitydetail')->name('frontend.community_detail');

Route::get('/pencarianall', 'HomeController@pencarianall')->name('frontend.pencarian_all');

//auth
Auth::routes();




