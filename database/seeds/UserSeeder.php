<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserProfile;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = '
[
   {
      "name":"Rohan Khadka",
      "usernmae":"r0hankhadka",
      "email":"rohankhadka@gmail.com",
      "password":"12345",
      "local_address":"Surunga",
      "District":"Jhapa",
      "phone_number":"9843123223"
   },
   {
      "name":"Abishek KC",
      "usernmae":"abish3kkc",
      "email":"abishekkc@gmail.com",
      "password":"12345",
      "local_address":"Gauradaha",
      "District":"Jhapa",
      "phone_number":"9843123533"
   },
   {
      "name":"Raaj Khadka",
      "usernmae":"raajkhadka",
      "email":"raazkhadka@gmail.com",
      "password":"12345",
      "local_address":"Solmari",
      "District":"Jhapa",
      "phone_number":"9843129623"
   },
   {
      "name":"Sanjok Chauchan",
      "usernmae":"sanj0kchauhan",
      "email":"sanjokchauhan@gmail.com",
      "password":"12345",
      "local_address":"Damak",
      "District":"Jhapa",
      "phone_number":"9843693223"
   },
   {
      "name":"Karuna Khadka",
      "usernmae":"karunakhadka",
      "email":"karunakhadka@gmail.com",
      "password":"12345",
      "local_address":"Solmari",
      "District":"Jhapa",
      "phone_number":"9843123923"
   },
   {
      "name":"Sapan Karki",
      "usernmae":"sapankarki",
      "email":"sapankarki@gmail.com",
      "password":"12345",
      "local_address":"Birtamode",
      "District":"Jhapa",
      "phone_number":"9833123223"
   },
   {
      "name":"Samir Chetri",
      "usernmae":"samirchetri",
      "email":"samirchetri@gmail.com",
      "password":"12345",
      "local_address":"Birtamode",
      "District":"Jhapa",
      "phone_number":"9843123299"
   }
]

        ';

        $php_user = json_decode($users, true);
       	
       	foreach ($php_user as $user) {
       			$usercreated = User::create([
       				'name' => $user['name'],
       				'username' => $user['usernmae'],
       				'email'    => $user['email'],
       				'password' => Hash::make($user['password']),

       			]);

       			UserProfile::create([
       				'user_id' => $usercreated->id,
       				'phone_number' => $user['phone_number'],
       				'local_address' => $user['local_address'],
       				'district'   => $user['District'],       				
       			]);
       		
       	}
    }
}
