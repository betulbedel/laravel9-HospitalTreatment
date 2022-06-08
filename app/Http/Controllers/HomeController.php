<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Policlinic;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function storemessage(Request $request){
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();


        return redirect()->route('contact')->with('info','Your message has been sent. Thank You!');

    }
    public function storecomment(Request $request){
       // dd($request); //check your values
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->policlinic_id = $request->input('policlinic_id');
        $data->subject = $request->input('subject');
        $data->comment = $request->input('comment');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();


        return redirect()->route('policlinic', ['id'=>$request->input('policlinic_id')])->with('success','Your comment has been sent. Thank You!');

    }


    public function policlinic($id){

        $data=Policlinic::find($id);
        $images = DB::table('images')->where('policlinic_id',$id)->get();
        $comments = Comment::where('policlinic_id',$id)->where('status','True')->get();
        return view('/home/policlinic', [
            'data'=>$data,
             'images'=>$images,
            'comments'=>$comments

        ]);
    }
    public function faq(){

        $setting= Setting::first();
        $datalist = Faq::all();
        return view('/home/faq', [
            'setting'=>$setting,
            'datalist'=>$datalist,


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

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home/index');

    }
    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }





}
