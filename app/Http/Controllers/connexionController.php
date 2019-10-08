<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
 
class connexionController extends Controller
{
    public function index()
    {
        return view('connexion');
    }
    public function register(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $password=$req->input('password');
        $data=array('name'=>$name,'email'=>$email,'password'=>$password);
        DB::table('users')->insert($data);
        echo "Success";
    }
}