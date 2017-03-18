<?php

namespace Slomemes\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
	public function logout() {
		Auth::logout();
    	return redirect()->route('domov');
	}
}
