
<?php


Route::group(['prefix' => 'employee'], function () {
        Route::get('/index',['as' => 'employee.index', 'uses'=>'Admin\EmployeeController@index']);
        Route::get('/create',['as' => 'employee.create', 'uses'=>'Admin\EmployeeController@create']);
        Route::post('/store',['as' => 'employee.store', 'uses'=>'Admin\EmployeeController@store']);
        Route::get('/{employee}/edit',['as'=>'employee.edit','uses'=>'Admin\EmployeeController@edit']);
        Route::post('/{employee}',['as' => 'employee.update', 'uses'=>'Admin\EmployeeController@update']);
        Route::get('/{employee}/delete',['as'=>'employee.delete','uses'=>'Admin\EmployeeController@destroy']);
    });