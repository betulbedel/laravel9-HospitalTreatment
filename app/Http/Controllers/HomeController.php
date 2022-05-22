<?php

namespace App\Http\Controllers;

use App\Models\Policlinic;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $sliderdata=Policlinic::limit(4)->get();
        $policliniclist1=Policlinic::limit(6)->get();
        $setting= Setting::first();
        return view('/home/index', [
            'setting'=>$setting,
          'sliderdata'=>$sliderdata,
        'policliniclist1'=>$policliniclist1

        ]);
    }

    public function policlinic($id){

        $data=Policlinic::find($id);
        $images = DB::table('images')->where('policlinic_id',$id)->get();
        return view('/home/policlinic', [

            'data'=>$data,
             'images'=>$images

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
