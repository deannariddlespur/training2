<?php

//Route::get('users', 'UsersController@index');

Route::get('/', function()
{
 // $user = new User;
 // $user->username = 'NewUser';
 // $user->password = Hash::make('password');
 // $user->save();
 
 //User::create([
 //'username' => 'AnotherUser'
 //'password' => Hash::make('1234')
// ]);
 // $user = User::find(5);
 // $user->username = 'UpdatedName';
 // $user->save();
 //$user = User::find(5);
 //$user->delete();
  
  //return User::orderBy('username', 'asc')->get();
  
  $users = User::all();
  
 
return View::make('users/index', ['users'=>$users]);

});

Route::get('users/{username}', function($username)
{
   $user = User::whereUsername($username)->first();
   return View::make('users.show', ['user' => $user]);

  
});




