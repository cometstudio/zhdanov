<?php

// Panel
@include('panelRoutes.php');

// Index
Route::get('/', 'IndexController@index')->name('index');

// Person
Route::get('/yuri', 'PersonsController@yuri')->name('yuri');
Route::get('/irina', 'PersonsController@irina')->name('irina');

// Users
Route::group(['middleware' => ['guest']], function () {
    // Login
    Route::get('/login', 'UsersController@login');
    Route::post('/login', 'UsersController@postLogin')->name('postLogin');
    // Signup
    Route::get('/signup', 'UsersController@signup');
    Route::post('/signup', 'UsersController@postSignup')->name('postSignup');
});

// Courses
Route::get('/courses', 'CoursesController@index')->name('courses');
// Item
Route::get('/courses/{id}', 'CoursesController@item')->where('id', '[0-9]+')->name('course');

// Pack
Route::get('/pack', 'PackController@index')->name('pack');
Route::post('/pack/{action}/{courseId}', 'PackController@act')->name('packAction');

// Reviews
// Item
Route::get('/reviews/{id}', 'ReviewsController@item')->where('id', '[0-9]+')->name('review');

// Lessons
Route::get('/lessons', 'LessonsController@index')->name('lessons');
// Item
Route::get('/lessons/{id}', 'LessonsController@item')->where('id', '[0-9]+')->name('lesson');

// Webinars
Route::get('/webinars', 'WebinarsController@index')->name('webinars');
// Item
Route::get('/webinars/{id}', 'WebinarsController@item')->where('id', '[0-9]+')->name('webinar');

// Products
Route::get('/products', 'ProductsController@index')->name('products');
// Item
Route::get('/products/{id}', 'ProductsController@item')->where('id', '[0-9]+')->name('product');

// Schedule
Route::get('/schedule', 'ScheduleController@index')->name('schedule');
// Item
Route::get('/schedule/{id}', 'ScheduleController@item')->where('id', '[0-9]+')->name('scheduleItem');
// Add user
Route::post('/schedule/user/{action}/{id}', 'ScheduleController@addUser')->where('id', '[0-9]+')->name('scheduleAddUser');

// ProfFashionTime
Route::get('/proffashiontime', 'ProftimeController@index')->name('videochannel');

// Gallery
Route::get('/gallery', 'GalleryController@index')->name('gallery');

// Contacts
Route::get('/contacts', 'ContactsController@index')->name('contacts');

// Cart
Route::get('/cart', 'CartController@index');

// Activity async
Route::post('/activity/{action}', 'ActivityController@act');