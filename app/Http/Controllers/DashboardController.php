<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        if (Auth::user()->hasRole('medecins')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('ingénieurs')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('notaire')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('pediatrie')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('dentiste')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('neurologie')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('orthopédie')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('sychiatrie')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('ophtalmologie')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('otorhinolaryngologie')) {
            return view('pro.dashboard');
        } elseif (Auth::user()->hasRole('super')) {
            return view('super.dashboard');
        } elseif (Auth::user()->hasRole('user')) {
            return view('user.dashboard');
        } elseif (Auth::user()->hasRole('Avocats')) {

            return view('pro.dashboard');
        }

    }
        public function profile(){
            return view('pro.profile');
        }
}
