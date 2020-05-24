<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function toggle_saved()
    {
        error_log('Some message here.');
        Log::info('This is some useful information.');
        $id = Input::get('id');
        $user = Auth::user();
        $saved = $user->saved;
        $key = array_search($id, $saved);
        if ($key === FALSE) {
            array_push($saved, $id);
        } else {
            array_splice($saved, $key, 1);
        }
        $user->saved = $saved;
        $user->save();
        return response()->json();
    }
}
