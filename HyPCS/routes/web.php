<?php

Route::get('/', 'HomeController@index');

// Administrator Pages
Route::get('/adminWatch', function()
{
    return view('pages.admin.watch');
});
Route::get('/adminAssignReq', function()
{
    return view('pages.admin.assignReq');
});
Route::get('/adminAddClient', function()
{
    return view('pages.admin.addClient');
});
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