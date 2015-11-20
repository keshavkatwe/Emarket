<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use App\User;
use Auth;
use Input;
use App\tbl_user_follow;
use App\tbl_country;
use App\tbl_state;

class Member extends Controller {

    

    public function editUser() {
        $data = array(
            'user' => User::find(Auth::user()->id),
            'country' => tbl_country::lists('name', 'id'),
            'state' => tbl_state::lists('name', 'id'),
        );
        return view('pages/editUser', $data);
    }

    public function updateProfile(Request $request) {

        $input = Input::except('_token', 'image');
        foreach ($input as $key => $value) {
            $update = User::find(Auth::user()->id);
            $update->$key = $value;
            $update->save();
        }


        if (!empty($_FILES['image']['name'])) {
            $destinationPath = 'img'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = md5(time()) . '.' . $extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName);
            //$thumbnail_upload_path = asset($destinationPath . "/" . $fileName);

            $update = User::find(Auth::user()->id);
            $update->image = $fileName;
            $update->save();
        }

        return Redirect::back();
    }

}
