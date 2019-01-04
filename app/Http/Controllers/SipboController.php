<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SipboController extends Controller
{
    //
    public function index0(){
        return view('home');
    }

     public function index1(){
        return view('menu.cart');
    }

     public function index2(){
        return view('menu.categories');
    }

     public function index3(){
        return view('menu.checkout');
    }

     public function index4(){
        return view('menu.contact');
    }

     public function index5(){
        return view('menu.halamansimulasi');
    }

     public function index6(){
        return view('auth.login');
    }

     public function index7(){
        return view('menu.product');
    }

     public function index8(){
        return view('auth.register');
    }

     public function index9(){
        return view('menu.viabank');
    }

    public function index10(){
        return view('menu.viakartu');
    }
     public function index11(){
        return view('menu.productPertamax');
    }
     public function index12(){
        return view('menu.productPremium');
    }
     public function index13(){
        return view('menu.productPertalite');
    }
     public function index14(){
        return view('menu.productDexlite');
    }
     public function index15(){
        return view('menu.productBensin');
    }
     public function index16(){
        return view('menu.productSolar');
    }



}
