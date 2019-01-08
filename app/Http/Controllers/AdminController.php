<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function admin()
    {
        /*if(Gate::allows('access-admin')){
            return view('admin');
        }
        abort(404);*/

        $this->authorize('access-admin');

        return view('admin');
    }
}
