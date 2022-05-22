<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\HtmlHelper;

class HomeController extends Controller
{   
    protected $title = 'Students';
    protected $viewPath = 'students';
    protected $link = 'students';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = 'Dashboard';

        $page = collect();
        $page->title = $this->title;
        $page->link = url($this->link);
        return view('home', compact('page'));
        
    }
}
