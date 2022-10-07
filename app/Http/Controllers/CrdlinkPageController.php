<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrdlinkPageController extends Controller
{
 
    public function home(Request $request){
        $path = '/pages/home';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function signup(Request $request){
        $path = '/pages/signup';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function members(Request $request){
        $path = '/pages/members';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function pricing(Request $request){
        $path = '/pages/pricing';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function products_and_training(Request $request){
        $path = '/pages/products-and-training';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }


    public function about_us(Request $request){
        $path = '/pages/about_us';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function contact_us(Request $request){
        $path = '/pages/contact_us';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }


    public function millionaires_club(Request $request){
        $path = '/pages/millionaires_club';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function products(Request $request){
        $path = '/pages/products';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }
    
    public function culture(Request $request){
        $path = '/pages/culture';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }
    public function free_trial(Request $request){
        $path = '/pages/free_trial';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }

    public function terms(Request $request){
        $path = '/pages/terms';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }
    public function privacy(Request $request){
        $path = '/pages/privacy';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }
    
    public function unsubscribe(Request $request){
        $path = '/pages/unsubscribe';
        if (view()->exists($path)) {
            return view($path);
        } else {
            //abort('404'); 
            return('No Page Found! '.$path);
        }
    }
    

    public function sitemap(Request $request){    
        $path = '/pages/sitemap';
        if (view()->exists($path)) {
            return response()->view($path)->withHeaders([
                'Content-Type' => 'text/xml'
            ]);
        } else {
            //abort('404'); 
        return('XML Does Not Exist');
        }
    }


}
