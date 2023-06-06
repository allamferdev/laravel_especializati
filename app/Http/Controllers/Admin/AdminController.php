<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function index()
    {
        return view('admin.dashboard');
    }

    public function financeiro()
    {
        return view('admin.financeiro');
    }

    public function produtos()
    {
        return view('admin.produtos');
    }
}