<?php

Route::get('/', 'HomeController@index');

//User redirection and validation
Route::get('/user', 'UserController@index');

//Login
Route::post('/login', 'Auth\LoginController@login')->name('login');

// Administrator Pages
Route::get('/adminWatch', 'AdminController@index');

Route::get('/adminAssignReq', function()
{
    return view('pages.admin.assignReq');
});

Route::get('/adminAddClient','AdminController@create');
Route::post('/adminAddClient','AdminController@storeClient')->name('addClientDB');

Route::get('/adminAddConsultant','AdminController@createConsultant');
Route::post('/adminAddConsultant','AdminController@storeConsultant')->name('addConsultantDB');

Route::get('/adminAddConsultant', function()
{
    return view('pages.admin.addConsultant');
});

//Client pages
Route::get('/clientReq', function()
{
    return view('pages.client.clientReq');
});
Route::get('/calendarClient', function()
{
    return view('pages.client.calendar');
});


//Consultant pages
Route::get('/newReq', function()
{
    return view ('pages.consultant.newReq');
});
Route::get('/regVisit', function()
{
    return view ('pages.consultant.regVisit');
});
Route::get('/calendarCons', function()
{
    return view ('pages.consultant.calendar');
});
Route::get('/schedReq', function()
{
    return view ('pages.consultant.schedReq');
});

Route::get('/consultantReq', function()
{
    return view('pages.consultantReq');
});