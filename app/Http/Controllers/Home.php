<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class Home extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($userId = NULL) {
        if (!empty($userId)) {
            $user = User::find($userId);
        } else {
            $user = Auth::user();
        }
        return view('pages.home', array('user' => $user));
    }


}
