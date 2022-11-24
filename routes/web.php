<?php

Route::get('/webLogout', 'AuthController@webLogout')->name('webLogout');

Route::get('/{any}', function () {
    return view('frontend.homecontainer');
})->where('any', '^(?!((apidocs)|(saifurmongodb)|(login/google)|(login/google/callback)|(login/facebook)|(login/facebook/callback)|(imageResize))$).*');


// Route::get('saifurmongodb', function () {
//     return "hello first laravel package";
// });


// image resize
Route::get('/imageResize', 'Backend\CacheController@imageResize');
    // :src="'/imageResize?url='+product.productPicturePath+'&sizeX=150&sizeY=150' || '/uploads/no_image.png'"



// Route::get('/login/{service}', function(){
//     return 'hello world';
//         // return Socialite::driver($service)->redirect();
// });

// social login
Route::get('/login/{service}', 'AuthController@socialLoginRedirectToProvider');
Route::get('/login/{service}/callback', 'AuthController@socialLoginHandleProviderCallback');







