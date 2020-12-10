<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Builder;

class PostController extends Controller
{
    public function UploadPost(PostRequest $req)
    {

    $_monthsList = array(".01." => "Jan", ".02." => "Feb", 
		  ".03." => "Mar", ".04." => "Apr", ".05." => "May", ".06." => "June", 
		  ".07." => "July", ".08." => "Aug", ".09." => "Sept",
		  ".10." => "Oct", ".11." => "Nov", ".12." => "Dec");

		$currentDate = date("d.m.");
		$_mD = date(".m.");
		$currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);

		$body = $_POST['body'];

		$body  = preg_replace( "#\r?\n#", "<br />", $body);

		$id = Auth::user()->id;

    	$post = new Post();
    	//$post->title = $req->input('title');
    	$post->body = $body;
    	$post->date = $currentDate;
    	$post->user_id = $id;

    	$post->save();

    	return redirect('main');
    }
    public function PostOutput()
    {
        $id = Auth::user()->id;
        $prog = "programming";
        $music = "music";
        $sport = "sport";
        $news = "news";
        $games = "games";
    	$posts = DB::table('posts')
    		->leftJoin('users', 'users.id', '=', 'posts.user_id')
           // ->leftJoin('stats', 'users.id', '=', 'stats.user_id')
		    //->where('user_id', $id)
            ->select('*')
            //->inRandomOrder()
            ->get();


        $main_stats = DB::table('stats')
            ->leftJoin('users', 'users.id', '=', 'stats.user_id')
            ->select('*')
            ->where('user_id', $id)
            ->get();

        $c_programming = DB::table('stats')
            ->leftJoin('users', 'users.id', '=', 'stats.user_id')
            ->select('*')
            ->where('user_id', $id)
            ->where('category', $prog)
            ->get();

        $c_music = DB::table('stats')
            ->leftJoin('users', 'users.id', '=', 'stats.user_id')
            ->select('*')
            ->where('user_id', $id)
            ->where('category', $music)
            ->get();

        $c_sport = DB::table('stats')
            ->leftJoin('users', 'users.id', '=', 'stats.user_id')
            ->select('*')
            ->where('user_id', $id)
            ->where('category', $sport)
            ->get();

        $c_news = DB::table('stats')
            ->leftJoin('users', 'users.id', '=', 'stats.user_id')
            ->select('*')
            ->where('user_id', $id)
            ->where('category', $news)
            ->get();

        $c_games = DB::table('stats')
            ->leftJoin('users', 'users.id', '=', 'stats.user_id')
            ->select('*')
            ->where('user_id', $id)
            ->where('category', $games)
            ->get();


        $category_count_main = count($main_stats);
        $category_count_sport = count($c_sport);
        $category_count_prog = count($c_programming);
        $category_count_music = count($c_music);
        $category_count_news = count($c_news);
        $category_count_games = count($c_games);
         
        if($category_count_main == 0) {
            $sport_proc = floor(($category_count_sport / 1) * 100);
            $music_proc = floor(($category_count_music / 1) * 100);
            $prog_proc = floor(($category_count_prog / 1) * 100);
            $news_proc = floor(($category_count_news / 1) * 100);
            $games_proc = floor(($category_count_games / 1) * 100); 
        } else {
            $sport_proc = floor(($category_count_sport / $category_count_main) * 100);
            $music_proc = floor(($category_count_music / $category_count_main) * 100);
            $prog_proc = floor(($category_count_prog / $category_count_main) * 100);
            $news_proc = floor(($category_count_news / $category_count_main) * 100);
            $games_proc = floor(($category_count_games / $category_count_main) * 100);
        }
         
         //{{ $posts->links('paginate') }}

		return view('main', compact('posts', 'prog', 'music', 'category_count_music', 'category_count_prog', 'sport', 'category_count_sport', 'category_count_main', 'sport_proc', 'prog_proc', 'music_proc', 'games_proc', 'news_proc', 'category_count_news', 'category_count_games', 'news', 'games'));
    }
	public function GetFormPost()
    {
    	return view('upload_post');
    }

	public function UploadPostMain(Request $request)
	{
    	$_monthsList = array(".01." => "Jan", ".02." => "Feb", 
		  ".03." => "Mar", ".04." => "Apr", ".05." => "May", ".06." => "June", 
		  ".07." => "July", ".08." => "Aug", ".09." => "Sept",
		  ".10." => "Oct", ".11." => "Nov", ".12." => "Dec");

		$currentDate = date("d.m.");
		$_mD = date(".m.");
		$currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);

		$body = $_POST['body'];

		$body  = preg_replace( "#\r?\n#", "<br />", $body);

		$id = Auth::user()->id;

		$paths = [];
		$paths[0] = null;
		$paths[1] = null;
		$paths[2] = null;
		$paths[3] = null;
		$paths[4] = null;
		$paths[5] = null;
		$paths[6] = null;
		$paths[7] = null;
		$paths[8] = null;

		$count = 0;

    
if ($request->file){
    foreach ($request->file as $files) {
           
            $imageName = time() . '.' . $files->getClientOriginalName();
            $files->move(('images'), $imageName);
            $paths[$count] = $imageName;
            $count = $count + 1;
    }
}
    if($paths <> ''){  
      
      \DB::table('posts')->insert(
        [
          'file1' =>  $paths[0],
          'file2' =>  $paths[1],
          'file3' =>  $paths[2],
          'file4' =>  $paths[3],
          'file5' =>  $paths[4],
          'file6' =>  $paths[5],
          'file7' =>  $paths[6],
          'file8' =>  $paths[7],
          'file9' =>  $paths[8],

          'user_id' => $id,
		  'body' => $body,
          'date' => $currentDate 
        ]);
    } else {
      
        \DB::table('posts')->insert(
          [
          'user_id' => $id,
		  'body' => $body,
          'date' => $currentDate 
          ]);
    }  	

    return redirect('main');	
    }
    public function Show($post_id)
	{
    $id = Auth::user()->id;

    $posts = DB::table('posts')
    	->leftJoin('users', 'users.id', '=', 'posts.user_id')
		->select('*')
		->where('post_id', $post_id)
		->first();


    $haystack = $posts->body;
    $array[0] = array('programming', 'programmer', 'code');
    
    foreach($array[0] as $search){
    $pos = strpos($haystack, $search);
    if ($pos !== false) {
            \DB::table('stats')->insert([
                'user_id' => $id,
                'category' => 'programming',
                'post_id' => $post_id
            ]); 
        break;
      }
    }
    
    
    $haystack = $posts->body;
    $array[0] = array('sport', 'gym', 'athlete');
    
    foreach($array[0] as $search){
    $pos = strpos($haystack, $search);
    if ($pos !== false) {
            \DB::table('stats')->insert([
                'user_id' => $id,
                'category' => 'sport',
                'post_id' => $post_id
            ]); 
        break;
      }
    }
       
    
    $haystack = $posts->body;
    $array[0] = array('music', 'rock', 'blues');
    
    foreach($array[0] as $search){
    $pos = strpos($haystack, $search);
    if ($pos !== false) {
            \DB::table('stats')->insert([
                'user_id' => $id,
                'category' => 'music',
                'post_id' => $post_id
            ]); 
        break;
      }
    }

    $haystack = $posts->body;
    $array[0] = array('news', 'politics');
    
    foreach($array[0] as $search){
    $pos = strpos($haystack, $search);
    if ($pos !== false) {
            \DB::table('stats')->insert([
                'user_id' => $id,
                'category' => 'news',
                'post_id' => $post_id
            ]); 
        break;
      }
    }  

    $haystack = $posts->body;
    $array[0] = array('games', 'playstation', 'PC', 'ps4');
    
    foreach($array[0] as $search){
    $pos = strpos($haystack, $search);
    if ($pos !== false) {
            \DB::table('stats')->insert([
                'user_id' => $id,
                'category' => 'games',
                'post_id' => $post_id
            ]); 
        break;
      }
    }  

	$comments = DB::table('comments')
		->leftJoin('users', 'users.id', '=', 'comments.user_id')
		->where('post_id', $post_id)
		->get();

    $likes = DB::table('likes')
        ->select('*')
        ->where('post_id', $post_id)
        ->count();

	$comments_sum = DB::table('comments')
		->select('*')
		->where('post_id', $post_id)
		->count();

    \DB::table('posts')->where('post_id', $post_id)->update(
      [
      'comments_sum' => $comments_sum,
      ]);

	return view('/post-page', compact('posts', 'comments', 'comments_sum', 'likes'));
	}
    public function GetFormlike(){
    return view('uplike');
    }
    public function Like(){
       
        $id = Auth::user()->id;

        \DB::table('likes')->insert(
          [
          'value' => $_POST['value'] + "1",
          'post_id' => $_POST['post_id'],
          'user_id' => $id,
          ]);
    return redirect('/profile');  
    }
}
