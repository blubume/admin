<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App;
use Lang;
use Cookie;
use Response;
use Validator;
use Crypt;
class HomeController extends Controller
{
    protected $lang = "ru";
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        
     

        //$this->middleware('auth');
        $l = Cookie::get('lang');
        if(isset($l)) {
            $l = Crypt::decrypt($l);
        } else{
       
            if(geoip_country_code_by_name($_SERVER['REMOTE_ADDR']) ==  "RU") {
                $l = "ru";
            } else{
                $l = "en";
            }
        }
        $lang =  $l;
        //if(strlen($lang) < 2) $lang = $this->lang;

        $this->lang = $lang;
        App::setLocale($lang);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function landing()
    {
        return view('landing',["lang" => $this->lang]);
    }

    public function updateLang()
    {
       // $input = Input::get('lang');
        $lang =  $_GET['lang'];
        return redirect('/')->withCookie(cookie()->forever('lang', $lang));
    }
}
