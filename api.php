Route::get('/buku', 'BookController@index');
Route::get('/buku/{id}', 'BookController@show');
Route::post