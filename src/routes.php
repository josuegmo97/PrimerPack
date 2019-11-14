<?php

// Route::get('saludo', function(){
// 	echo 'Hello from the first package!';
// });

Route::get('jm/saludo/{message?}', 'Gabo\Saludo\SaludoController@saludo');
Route::get('jm/despedida/{message?}', 'Gabo\Saludo\SaludoController@despedida');