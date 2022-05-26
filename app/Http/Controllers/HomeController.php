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

    public function about(){


        $setting= Setting::first();
        return view('/home/about', [
            'setting'=>$setting,


        ]);
    }

    public function references(){

        $setting= Setting::first();
        return view('/home/references', [
            'setting'=>$setting,


        ]);
    }


    public function contact(){

        $setting= Setting::first();
        return view('/home/contact', [
            'setting'=>$setting,


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


    public function doctors(){
        return view('/home/doctors');
    }
    public function blogDeatils(){
        return view('/home/blog-details');
    }


    public function blog(){
        return view('/home/blog');
    }




}
