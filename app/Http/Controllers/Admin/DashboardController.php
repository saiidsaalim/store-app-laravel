<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    public function index()
    {
        abort_unless(auth()->user()->role === 'admin', 403);

        return view('pages.admin.dashboard');
    }
}
