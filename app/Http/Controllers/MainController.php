<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\Pj;

class MainController extends Controller
{
    public function index()
    {
        $news = News::latest()
        ->limit(3)
    	->get();
    	
      return view('pages.main', compact('news'));
    }
    
        public function contact()
    {
    	
      return view('pages.contact');
    }
    
        public function about()
    {
    	
      return view('pages.about');
    }
    
        public function newws()
    {
      $news = News::latest()
    	->get();
    	
      return view('pages.newws', compact('news'));
    }
    
        public function project()
    {
      $pjs = Pj::latest()
    	->get();
    	
      return view('pages.project', compact('pjs'));
    }
    
        public function newsolo(News $solo)
    {


      return view('pages.newsolo', compact('solo'));
    }
    
            public function projectsolo(Pj $solo)
    {


      return view('pages.projectsolo', compact('solo'));
    }
    
          public function contacts(Request $request)
      {
      $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'message2' => request('message'),
      );
    // return $data;
    \Mail::send('email.mail1', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'], $data['name'], $data['message2']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
    });
    return redirect('/');
    }
}
