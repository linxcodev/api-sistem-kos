<?php

namespace App\Http\Controllers\AuthOwner;

use App\Http\Requests\OwnerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:owner')->except('logout');
    }

    protected function guard(){
      return Auth::guard('owner');
    }

    public function showLoginForm()
    {
      return view('authOwner.login');
    }

    use AuthenticatesUsers;

    protected $redirectTo = '/owner/dashboard';
}
