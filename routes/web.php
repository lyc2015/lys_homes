<?php

// FRONT-END ROUTES
Route::get('/', 'FrontpageController@index')->name('home');
Route::get('/company2/{subpage?}', 'FrontpageController@company')->name('company');
Route::get('/company2/business/{subpage}', 'FrontpageController@companyBusiness')->name('company.business');
Route::get('/simplified-chinese2/{subpage?}', 'FrontpageController@simplifiedChinese2')->name('simplifiedChinese');
Route::get('/simplified-chinese/{subpage?}', 'FrontpageController@simplifiedChinese')->name('simplifiedChinese');
Route::get('/recruit/{subpage?}', 'FrontpageController@recruit')->name('recruit');
Route::get('/stream/{filename}', 'StreamController@stream')->name('stream');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@messageContact')->name('contact.message');
Route::get('/properties', 'PagesController@properties')->name('property');
Route::get('/property/{id}', 'PagesController@propertieshow')->name('property.show');

Route::resource('news', 'NewsController', ['only' => ['index','show']]);
//Route::resource('company', 'CompanyController', ['only' => ['index','show']]);
Route::get('/company/{subpage?}', 'CompanyInfoController@company')->name('company');
Route::get('/company/business/{subpage}', 'CompanyInfoController@companyBusiness')->name('company.business');

/**
Route::get('/slider', 'FrontpageController@slider')->name('slider.index');

Route::get('/search', 'FrontpageController@search')->name('search');

Route::post('/property/message', 'PagesController@messageAgent')->name('property.message');
Route::post('/property/comment/{id}', 'PagesController@propertyComments')->name('property.comment');
Route::post('/property/rating', 'PagesController@propertyRating')->name('property.rating');
Route::get('/property/city/{cityslug}', 'PagesController@propertyCities')->name('property.city');

Route::get('/agents', 'PagesController@agents')->name('agents');
Route::get('/agents/{id}', 'PagesController@agentshow')->name('agents.show');

Route::get('/gallery', 'PagesController@gallery')->name('gallery');

Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/blog/{id}', 'PagesController@blogshow')->name('blog.show');
Route::post('/blog/comment/{id}', 'PagesController@blogComments')->name('blog.comment');

Route::get('/blog/categories/{slug}', 'PagesController@blogCategories')->name('blog.categories');
Route::get('/blog/tags/{slug}', 'PagesController@blogTags')->name('blog.tags');
Route::get('/blog/author/{username}', 'PagesController@blogAuthor')->name('blog.author');
**/

Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin'], 'as' => 'admin.'], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('videos', 'DashboardController@video')->name('video.get');
    Route::post('videos', 'DashboardController@video')->name('video.set');
    Route::resource('properties', 'PropertyController');
    Route::get('rents', 'PropertyController@rents')->name("rent");
    Route::get('sales', 'PropertyController@sales')->name("sale");
    Route::post('properties/gallery/delete', 'PropertyController@galleryImageDelete')->name('gallery-delete');
    Route::resource('article', 'ArticleController');
    Route::resource('job', 'JobController');
    Route::resource('career', 'CareerController');
    Route::resource('newgraduate', 'NewgraduateController');
    Route::resource('homepage', 'HomePageController');
    Route::resource('fileupload', 'FileUploadController');

    Route::resource('companyinfo', 'CompanyInfoController', ['only' => ['index','destroy']]);
    Route::resource('philosophy', 'PhilosophyController');
    Route::resource('outline', 'OutlineController');
    Route::resource('history', 'HistoryController');
    Route::resource('organization', 'OrganizationController');
    Route::resource('business', 'BusinessController');
    Route::resource('release', 'ReleaseController');
    Route::resource('contact', 'ContactController');

    Route::resource('companyinfozh', 'CompanyInfoZhController', ['only' => ['index','destroy']]);
    Route::resource('indexzh', 'IndexZhController');
    Route::resource('corporatezh', 'CorporateZhController');
    Route::resource('profilezh', 'ProfileZhController');
    Route::resource('disclaimerzh', 'DisclaimerZhController');

/**
    Route::resource('tags', 'TagController');
    Route::resource('categories', 'CategoryController');
    Route::resource('posts', 'PostController');
    Route::resource('features', 'FeatureController');
    Route::resource('sliders', 'SliderController');
    Route::resource('services', 'ServiceController');
    Route::resource('testimonials', 'TestimonialController');

    Route::get('galleries/album', 'GalleryController@album')->name('album');
    Route::post('galleries/album/store', 'GalleryController@albumStore')->name('album.store');
    Route::get('galleries/{id}/gallery', 'GalleryController@albumGallery')->name('album.gallery');
    Route::post('galleries', 'GalleryController@Gallerystore')->name('galleries.store');

    Route::get('settings', 'DashboardController@settings')->name('settings');
    Route::post('settings', 'DashboardController@settingStore')->name('settings.store');

    Route::get('profile', 'DashboardController@profile')->name('profile');
    Route::post('profile', 'DashboardController@profileUpdate')->name('profile.update');

    Route::get('message', 'DashboardController@message')->name('message');
    Route::get('message/read/{id}', 'DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}', 'DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay', 'DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread', 'DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}', 'DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');

    Route::get('changepassword', 'DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword', 'DashboardController@changePasswordUpdate')->name('changepassword.update');
    */
});

/**
Route::group(['prefix' => 'agent', 'namespace' => 'Agent', 'middleware' => ['auth', 'agent'], 'as' => 'agent.'], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'DashboardController@profile')->name('profile');
    Route::post('profile', 'DashboardController@profileUpdate')->name('profile.update');
    Route::get('changepassword', 'DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword', 'DashboardController@changePasswordUpdate')->name('changepassword.update');
    Route::resource('properties', 'PropertyController');
    Route::post('properties/gallery/delete', 'PropertyController@galleryImageDelete')->name('gallery-delete');

    Route::get('message', 'DashboardController@message')->name('message');
    Route::get('message/read/{id}', 'DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}', 'DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay', 'DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread', 'DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}', 'DashboardController@messageDelete')->name('messages.destroy');
    Route::post('message/mail', 'DashboardController@contactMail')->name('message.mail');
});

Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user'], 'as' => 'user.'], function () {

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('profile', 'DashboardController@profile')->name('profile');
    Route::post('profile', 'DashboardController@profileUpdate')->name('profile.update');
    Route::get('changepassword', 'DashboardController@changePassword')->name('changepassword');
    Route::post('changepassword', 'DashboardController@changePasswordUpdate')->name('changepassword.update');

    Route::get('message', 'DashboardController@message')->name('message');
    Route::get('message/read/{id}', 'DashboardController@messageRead')->name('message.read');
    Route::get('message/replay/{id}', 'DashboardController@messageReplay')->name('message.replay');
    Route::post('message/replay', 'DashboardController@messageSend')->name('message.send');
    Route::post('message/readunread', 'DashboardController@messageReadUnread')->name('message.readunread');
    Route::delete('message/delete/{id}', 'DashboardController@messageDelete')->name('messages.destroy');
});
*/


Route::group(['prefix' => 'admin/companyinfo', 'namespace' => 'Admin\Companyinfo', 'middleware' => ['auth', 'admin'], 'as' => 'admin.companyinfo'], function () {
   });
