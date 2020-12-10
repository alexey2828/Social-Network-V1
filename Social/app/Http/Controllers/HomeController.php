<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ajax_form()
    {
        return view('ajax-form');
    }

    public function ajax(Request $request)
    {
        $id = Auth::user()->id;

        \DB::table('posts')->insert(
        [
          'user_id' => $id,
          'body' => $request->file,
          
        ]);

        return response()->json([
            'data'=>$request->file
        ]);
        

    }

    public function ajaxtest2()
    {   
        $posts = DB::table('posts')->get()->reverse()
            ->take(10);
        return view('ajaxtest', compact('posts'));
    }

}
