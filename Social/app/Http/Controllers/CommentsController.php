<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;

class CommentsController extends Controller
{
	public function GetFormComment()
    {
    	return view('upload_comment');
    }

	public function UploadComment(Request $request)
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

//		$paths = [];
//		$paths[0] = null;
//		$paths[1] = null;
//		$paths[2] = null;
//		$paths[3] = null;
//		$paths[4] = null;
//		$paths[5] = null;
//		$paths[6] = null;
//		$paths[7] = null;
//		$paths[8] = null;
//
//		$count = 0;
//
//    
//if ($request->file){
//    foreach ($request->file as $files) {
//           
//            $imageName = time() . '.' . $files->getClientOriginalName();
//            $files->move(('images'), $imageName);
//            $paths[$count] = $imageName;
//            $count = $count + 1;
//    }
//}
//    if($paths <> ''){  
      
      \DB::table('comments')->insert(
        [
//          'file1' =>  $paths[0],
//          'file2' =>  $paths[1],
//          'file3' =>  $paths[2],
//          'file4' =>  $paths[3],
//          'file5' =>  $paths[4],
//          'file6' =>  $paths[5],
//          'file7' =>  $paths[6],
//          'file8' =>  $paths[7],
//          'file9' =>  $paths[8],

          'user_id' => $id,
          'post_id' => $_POST['post_id'],
		  'comment_body' => $body,
          'date' => $currentDate 
        ]);
//    } else {
//      
//        \DB::table('posts')->insert(
//          [
//          'user_id' => $id,
//		  'body' => $body,
//          'date' => $currentDate 
//          ]);
//    }  	

    return redirect('/post/'. $_POST['post_id']);	
    }
}
