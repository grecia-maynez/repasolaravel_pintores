<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstructurasDeControl extends Controller
{
    //
    public function welcome(){
        return redirect()->action('EstructurasDeControl@inicio');
    }
    public function inicio (){
        return view('inicio',[
            'title'=>'Principal-GPME'
            ]);
    }
    public function login(){
        return view('login');
    }
    public function validarlogin(Request $request){
        $user=$request->input('user');
        $pass=$request->input('password');
        $key=$request->input('key');

        if($user==='Maynez'){
            $url='inicio';
        }
        else{
            $url='login';
        }

        return view('inicio');
    }
    public function nh (){
        return view('nh',[
            'title'=>'NaotoHattori'
            ]);
    }
    public function rm (){
        return view('rm',[
            'title'=>'Magritte'
            ]);
    }
    public function car (){
        return view('car',[
            'title'=>'Caravaggio'
            ]);
    }
    public function v (){
        return view('v',[
            'title'=>'Vergvoktre'
            ]);
    }
    public function fk (){
        return view('fk',[
            'title'=>'FridaKahlo'
            ]);
    }
}
