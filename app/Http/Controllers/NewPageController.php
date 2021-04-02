<?php

namespace App\Http\Controllers;

use App\shorturl;
use Illuminate\Http\Request;

class NewPageController extends Controller
{
    //
    public function index() {
        $shorturls = shorturl :: all();
        return view('listing',compact('shorturls'));
    }

    public function new() {
        return view('new');
    }

    public function store(Request $request) {
        $request->validate([
            'longURL' => 'required'
        ]);

        $shorturl = new shorturl;
        $shorturl->longURL = $request->get('longURL');
        $number = rand(10,99);
        $string = $this->generateRandomString(3);
        $shorturl->shortURL = "/gt/328$string$number";
        $shorturl->save();




        return redirect('/')->with('success','shorturl created');

    }

    function generateRandomString($length = 3) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
