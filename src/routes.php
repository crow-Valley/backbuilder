 <?php
   /*
  |--------------------------------------------------------------------------
  | RUTAS DE ADMIN
  |--------------------------------------------------------------------------
  |
  */

  Route::group(['middleware' => ['auth','onlyAdmin']], function()
  {
    // DEFAULT
    Route::get('/admin',                        'AdminController@dashboard');
    Route::get('/admin/{modelName}',            'AdminController@listModel');
    Route::get('/admin/{modelName}/add',        'AdminController@addModel');
    Route::post('/admin/{modelName}/add',       'AdminController@addDataModel');
    Route::get('/admin/{modelName}/edit/{id}',  'AdminController@editModelExists');
    Route::any('/admin/{modelName}/remove/{id}','AdminController@deleteDataModel');
    // logout
    Route::any('/admin/logout',                 'Auth\AuthController@logout');
  });
