<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class SettingsController extends Controller
{
public function getFormAvatr()
    {
        return view('upload-avatar');
    }

public function uploadAvatar(Request $request)
    {
        $id = Auth::user()->id;

       foreach ($request->file() as $file) {
           foreach ($file as $f) {
             $f->move(('images'), time().'_'.$f->getClientOriginalName());
           }
       }

    \DB::table('users')->where('id', $id)->update(
     [
     'avatar' => time().'_'.$f->getClientOriginalName(),
     ]);    

    return redirect('main');
}
public function GetFormHeader()
    {
        return view('upload_file_header');
    }

public function UploadHeader(Request $request)
    {
        $id = Auth::user()->id;

       foreach ($request->file() as $file) {
           foreach ($file as $f) {
             $f->move(('images'), time().'_'.$f->getClientOriginalName());
           }
       }

    \DB::table('users')->where('id', $id)->update(
     [
     'header' => time().'_'.$f->getClientOriginalName(),
     ]);    

    return redirect('main');
}
}
