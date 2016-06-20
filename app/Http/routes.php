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
Route::get('/courses', 'CoursesController@index');
// Item
Route::get('/courses/{id}', 'CoursesController@item')->where('id', '[0-9]+');

// Lessons
Route::get('/lessons', 'LessonsController@index')->name('lessons');
// Item
Route::get('/lessons/{id}', 'LessonsController@item')->where('id', '[0-9]+')->name('lesson');

// Webinars
Route::get('/webinars', 'WebinarsController@index')->name('webinars');
// Item
Route::get('/webinars/{id}', 'WebinarsController@item')->where('id', '[0-9]+')->name('webinar');

// Shop
Route::get('/products', 'ProductsController@index');
// Item
Route::get('/products/{id}', 'ProductsController@item')->where('id', '[0-9]+')->name('product');

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