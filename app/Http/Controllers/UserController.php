<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function home(){

        $user = " ¿Tiene cuenta? ";
        $opcion = "Login";
        $opcion2 = "Registrate";
        $opcion3 = "FAQ";
        $cont = "home";
        $url1 = "login";
        $url2 = "register"; 
        $url3 = "question";

     	return view('welcome')
    	->with('users', $user)
    	->with('opcion',$opcion)
    	->with('opcion2',$opcion2)
    	->with('opcion3',$opcion3)
        ->with('cont',$cont)
        ->with('url1', $url1)
        ->with('url2', $url2)
        ->with('url3', $url3);
    }

    public function login(){

        $user = " ¿Tiene cuenta? ";
        $opcion = "Login";
        $opcion2 = "Registrate";
        $opcion3 = "FAQ";
        $cont = "login";
        $url1 = "login";
        $url2 = "register"; 
        $url3 = "question";
        return view('welcome')
        ->with('users', $user)
        ->with('opcion',$opcion)
        ->with('opcion2',$opcion2)
        ->with('opcion3',$opcion3)
        ->with('cont',$cont)
        ->with('url1', $url1)
        ->with('url2', $url2)
        ->with('url3', $url3);
    }

    public function register(){

        $user = " ¿Tiene cuenta? ";
        $opcion = "Login";
        $opcion2 = "Registrate";
        $opcion3 = "FAQ";
        $cont = "register";
        $url1 = "login";
        $url2 = "register"; 
        $url3 = "question";
        return view('welcome')
        ->with('users', $user)
        ->with('opcion',$opcion)
        ->with('opcion2',$opcion2)
        ->with('opcion3',$opcion3)
        ->with('cont',$cont)
        ->with('url1', $url1)
        ->with('url2', $url2)
        ->with('url3', $url3);
    }

    public function question(){

        $user = " ¿Tiene cuenta? ";
        $opcion = "Login";
        $opcion2 = "Registrate";
        $opcion3 = "FAQ";
        $cont = "question";
        $url1 = "login";
        $url2 = "register"; 
        $url3 = "question";
        return view('welcome')
        ->with('users', $user)
        ->with('opcion',$opcion)
        ->with('opcion2',$opcion2)
        ->with('opcion3',$opcion3)
        ->with('cont',$cont)
        ->with('url1', $url1)
        ->with('url2', $url2)
        ->with('url3', $url3);
    }    
    
    public function tarea(){

        $user = " ¿Tiene cuenta? ";
        $opcion = "Login";
        $opcion2 = "Registrate";
        $opcion3 = "FAQ";
        $cont = "xiu";
        $url1 = "login";
        $url2 = "register"; 
        $url3 = "question";
        return view('welcome')
        ->with('users', $user)
        ->with('opcion',$opcion)
        ->with('opcion2',$opcion2)
        ->with('opcion3',$opcion3)
        ->with('cont',$cont)
        ->with('url1', $url1)
        ->with('url2', $url2)
        ->with('url3', $url3);
    }
}
