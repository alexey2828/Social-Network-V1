<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Builder;

class UserController extends Controller
{
    public function UserShow($id)
    {
    $user = DB::table('users')
        ->select(['*'])
        ->where('id', $id)
        ->first();
    $posts = DB::table('posts')
    	->leftJoin('users', 'users.id', '=', 'posts.user_id')
        ->select('*')
	    ->where('users.id', $id)
        ->get();

	return view('profile', compact('user', 'posts'));

	
    }

public function FunctionName($value='')
{
	# code...
}
}
