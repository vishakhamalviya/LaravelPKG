<?php




Route::group(['namespace' => 'Vishakha\Contact\Http\Controllers'], function(){
	Route::get('contact', 'ContactController@index')->name('contact');
	Route::post('contact', 'ContactController@send');
	Route::get('contactList', 'ContactController@show')->name('contactList');
	Route::get('editContact/{id}', 'ContactController@edit')->name('editContact');
	Route::post('updateContact/{id}', 'ContactController@updateContact')->name('updateContact');
	Route::get('deleteContact/{id}', 'ContactController@deleteContact')->name('deleteContact');

})

?>
