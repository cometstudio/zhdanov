<?php

// Panel
@include('panelRoutes.php');

// Index
Route::get('/', 'IndexController@index')->name('index');

// Person
Route::get('/irina', 'IrinaController@index');
Route::get('/yuri', 'YuriController@index');

// Users
// Login
Route::get('/login', 'UsersController@login');
// Signup
Route::get('/signup', 'UsersController@signup');

// Courses
Route::get('/courses', 'CoursesController@index');
// Item
Route::get('/courses/{id}', 'CoursesController@item')->where('id', '[0-9]+');

// Lessons
Route::get('/lessons', 'LessonsController@index');
// Item
Route::get('/lessons/{id}', 'LessonsController@item')->where('id', '[0-9]+');

// Webinars
Route::get('/webinars', 'WebinarsController@index');
// Item
Route::get('/webinars/{id}', 'WebinarsController@item')->where('id', '[0-9]+');

// Shop
Route::get('/shop', 'ShopController@index');
// Item
Route::get('/shop/{id}', 'ShopController@item')->where('id', '[0-9]+');

// Timetable
Route::get('/timetable', 'TimetableController@index');
// Item
Route::get('/timetable/{id}', 'TimetableController@item')->where('id', '[0-9]+');

// ProfFashionTime
Route::get('/proffashiontime', 'ProftimeController@index');

// Gallery
Route::get('/gallery', 'GalleryController@index');

// Contacts
Route::get('/contacts', 'ContactsController@index');

// Cart
Route::get('/cart', 'CartController@index');