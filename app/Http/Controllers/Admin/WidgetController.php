<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function index()
    {
        $page_title = "Widgets";
        $page_breadcrumbs = array(
            array('title' => $page_title, 'url' => 'javascript:void(0);'),
            array('title' => 'Manage', 'url' => Route('userProfile')),
        );
        return view('admin.widgets.index', compact('page_title', 'page_breadcrumbs'));
    }

    public function editor()
    {

        $page_title = "Widgets";
        $page_breadcrumbs = array(
            array('title' => $page_title, 'url' => 'javascript:void(0);'),
            array('title' => 'Manage', 'url' => Route('userProfile')),
        );
        return view('admin.widgets.editor', compact('page_title', 'page_breadcrumbs'));
    }
}
