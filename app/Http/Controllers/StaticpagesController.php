<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticpagesController extends Controller
{
    //
    public function homepages(){
    return view('staticpages.homepages');
    }
    public function about(){
        return view('staticpages.about');
        }
        public function contact(){
            return view('staticpages.contact');
            }
            public function booking(){
                return view('staticpages.booking');
                }
                public function gallery(){
                    return view('staticpages.gallery');
                    }
                    public function icons(){
                        return view('staticpages.icons');
                        }
                        public function typography(){
                            return view('staticpages.typography');
                            }
}
