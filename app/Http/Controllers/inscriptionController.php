<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class inscriptionController extends Controller
{
    public function create()
    {
        return view('inscription');
    }
}