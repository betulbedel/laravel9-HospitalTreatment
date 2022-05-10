<?php

namespace App\Http\Controllers;

use App\Models\Policlinic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliderdata=Policlinic::limit(4)->get();
        $policliniclist1=Policlinic::limit(6)->get();
        return view('/home/index', [
          'sliderdata'=>$sliderdata,
        'policliniclist1'=>$policliniclist1

        ]);
    }
    public function about(){
        return view('/home/about');
    }
    public function doctors(){
        return view('/home/doctors');
    }
    public function blogDeatils(){
        return view('/home/blog-details');
    }

    public function contact(){
        return view('/home/contact');
    }
    public function blog(){
        return view('/home/blog');
    }



    public function index2() {
    return view('index2');
}
}
