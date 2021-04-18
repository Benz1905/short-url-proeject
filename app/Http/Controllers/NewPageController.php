<?php

namespace App\Http\Controllers;

use App\shorturl;
use Illuminate\Http\Request;

class NewPageController extends Controller
{
    //
    public function index() {
        $shorturls = shorturl :: all();
//        dd($shorturls);
        return view('listing',compact('shorturls'));
    }

    public function create() {
        return view('new');
    }

    public function store(Request $request) {

//        dd($this->randString());
        //dd(array($request));
        $long_url = $request->get('long_url');
        $short_url = $this->randString();

        shorturl::create([
            'longURL' => $long_url,
            'shortURL'=> $short_url
        ]);

        return redirect('/')->with('success','บันทึกเสร็จแล้ว');

//        $request->validate([
//            'longURL' => 'required'
//        ]);
//
//        $shorturl = new shorturl;
//        $shorturl->longURL = $request->get('longURL');
//        $number = rand(10,99);
//        $string = $this->generateRandomString(3);
//        $shorturl->shortURL = "/gt/328$string$number";
//        $shorturl->save();




//        return redirect('/')->with('success','shorturl created');

    }

//    function generateRandomString() {
//        $characters = 'abcdefghijklmnopqrstuvwxyz';
//        $charactersLength = strlen($characters);
//        $randomString = '';
//        for ($i = 0; $i < $length; $i++) {
//            $randomString .= $characters[rand(0, $charactersLength - 1)];
//        }
//        return $randomString;

//    }

        public function randString() {
        $character = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '1234567890';

//        dd(rand(0,5));
//        dd(strlen($character));
           $numlength = strlen($numbers);
           $charlength = strlen ($character);
            $string = '328';
            for ($i=0;$i<3;$i++){
                $string.=$character[rand(0,$charlength-1)];
            }

            for ($i=0;$i<2;$i++){
                $string.=$numbers[rand(0,$numlength-1)];
            }
            return $string;
        }

}
