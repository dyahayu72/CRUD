<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
 
class DikiController extends Controller
{
	public function hash(){
		$hash_password_saya = Hash::make('halo123');
		echo $hash_password_saya;
	}
 
}