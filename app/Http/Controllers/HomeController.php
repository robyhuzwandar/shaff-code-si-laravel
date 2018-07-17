<?php


namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\Event;
use App\Community;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function dashboard()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('frontend.index');
    }


    public function main()
    {
        $token = array('token' => 'main', 'title' =>'Beranda');

        $artikel = Post::paginate(6);
        $footartikel = Event::all();
        return view('frontend.main', compact('artikel', 'footartikel'))->with($token);
    }   


// event
    public function eventmain()
    {
        $token = array('token' => 'eventmain', 'title'=>'Event');
        $event = Event::paginate(6);
        return view('frontend.event_main', compact('event'))->with($token);
    }

    public function eventdetail($id)
    {
        $token = array('token' => 'eventmain', 'title'=>'Event');
        $event = Event::find($id);

        $community = Community::find($event->community_id);
        $user = User::find($event->user_id);
        return view('frontend.event_detail', compact('event','community','user'))->with($token);
    }

    public function pencarianevent(Request $request)
    {
        $token = array('token' => 'pencarianevent', 'title'=>'Event Pencarian');
        $key = $request->q;
        $event = Event::where('title', 'LIKE', "%$key%")->paginate(6);    
        return view('frontend.pencarian_event', compact('event'))->with($token);
    }

// artikel
    public function artikelmain(){

        $token = array('token' => 'artikel', 'title' =>'Artikel');
        $artikel = Post::paginate(6);
        $category = Category::all();
        $user = User::all();
        return view('frontend.artikel_main', compact('artikel', 'category','user'))->with($token);
    }

    public function pencarianartikel(Request $request)
    {
        $token = array('token' => 'pencarianevent', 'title'=>'Event Pencarian');
        $key = $request->q;
        $category = Category::all();
        $user = User::all();
        $artikel = Post::where('title', 'LIKE', "%$key%")->paginate(6);    
        return view('frontend.pencarian_artikel', compact('artikel', 'category','user'))->with($token);
    }

    public function artikeldetail($id){
        $token = array('token' => 'artikel', 'title' =>'Artikel');
        $artikel = Post::find($id);
        $id_user = $artikel->user_id;
        $user = User::find($id_user);
    

        return view('frontend.artikel_detail', compact('artikel', 'user'))->with($token);
}
    // community

    public function communitymain(){

        $token = array('token' => 'artikel', 'title' =>'Komunitas');
        $community = Community::paginate(6);
        return view('frontend.community_main', compact('community'))->with($token);
    }

    public function pencariancommunity(Request $request)
    {
        $token = array('token' => 'pencariancommunity', 'title'=>'Pencarian Komunitas');
        $key = $request->q;
        $community = Community::where('name', 'LIKE', "%$key%")->paginate(6);    
        return view('frontend.pencarian_community', compact('community'))->with($token);
    }

    public function communitydetail($id){
        $token = array('token' => 'artikel', 'title' =>'Komunitas');
        $community = Community::find($id);
        $user = User::find($community->user_id);
        return view('frontend.community_detail', compact('community','user'))->with($token);
    }

     public function pencarianall(Request $request)
    {
        $token = array('token' => 'pencarianevent', 'title'=>'Telusuri semua');
        $key = $request->q;
        $category = Category::all();
        $user = User::all();
        $artikel = Post::where('title', 'LIKE', "%$key%")->paginate(6);    
        $event = Event::where('title', 'LIKE', "%$key%")->paginate(6);    
        $community = Community::where('name', 'LIKE', "%$key%")->paginate(6);    
        return view('frontend.pencarian_all', compact('artikel', 'category','user', 'event','community'))->with($token);
    }

    public function profile()
    {   
        $token = array('token' => 'profil', 'title'=>'Profil');
        $user = User::all();
        return view('profile', compact('user'))->with($token);
    }
}
