<?php

// Panel
@include('panelRoutes.php');

// Index
Route::get('/', 'IndexController@index')->name('index');

// Person
Route::get('/yuri', 'PersonsController@yuri');
Route::get('/irina', 'PersonsController@irina');

// Users
// Login
Route::get('/login', 'UsersController@login');
// Signup
Route::get('/signup', 'UsersController@signup');

// Courses
Route::get('/courses', 'CoursesController@index')->name('courses');
// Item
Route::get('/courses/{id}', 'CoursesController@item')->where('id', '[0-9]+')->name('course');

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
Route::get('/schedule/{id}', 'ScheduleController@item')->where('id', '[0-9]+');

// ProfFashionTime
Route::get('/proffashiontime', 'ProftimeController@index')->name('videochannel');

// Gallery
Route::get('/gallery', 'GalleryController@index')->name('gallery');

// Contacts
Route::get('/contacts', 'ContactsController@index')->name('contacts');

// Cart
Route::get('/cart', 'CartController@index');