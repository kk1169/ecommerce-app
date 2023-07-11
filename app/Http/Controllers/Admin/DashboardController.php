<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = "Dashboard";
        $page_breadcrumbs = array(
            array('title' => $page_title, 'url' => 'javascript:void(0);'),
            array('title' => 'Manage', 'url' => Route('userProfile')),
        );
        return view('admin.dashboard', compact('page_title', 'page_breadcrumbs'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function table()
    {
        $page_title = "Table";
        $page_breadcrumbs = array(
            array('title' => $page_title, 'url' => 'javascript:void(0);'),
            array('title' => 'Manage', 'url' => Route('userProfile')),
        );
        return view('admin.table', compact('page_title', 'page_breadcrumbs'));
    }

    public function profile()
    {
        $page_title = "Profile";
        $page_breadcrumbs = array(
            array('title' => $page_title, 'url' => 'javascript:void(0);'),
            array('title' => 'Manage', 'url' => Route('userProfile')),
        );
        return view('admin.profile', compact('page_title', 'page_breadcrumbs'));
    }
}
