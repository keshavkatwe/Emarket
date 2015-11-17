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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId = NULL) {

        if (!empty($userId)) {
            $data = array(
                'follower' => User::find($userId)->followers,
                'following' => User::find($userId)->following,
                'userName' => User::find($userId)->userName()
            );
        } else {
            $data = array(
                'follower' => Auth::user()->followers,
                'following' => Auth::user()->following,
                'userName' => Auth::user()->userName()
            );
        }


        return view('pages/follower', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    public function follow(Request $request) {

        $user = tbl_user_follow::firstOrCreate(['user_id' => Auth::user()->id, 'following_id' => $request->user_id]);

        if (!empty($user->active) && $user->active == 1) {
            $user->active = 0;
            $flag = 0;
        } else {
            $user->active = 1;
            $flag = 1;
        }

        $user->save();

        $userInfo = User::find($request->user_id);

        return response()->json([
                    'following' => $flag,
                    'following_count' => count($userInfo->followers)
        ]);
    }

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
