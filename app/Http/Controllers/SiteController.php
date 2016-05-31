<?php

namespace hortifruti\Http\Controllers;

use Illuminate\Http\Request;

use hortifruti\Http\Requests;

class SiteController extends Controller
{
    public function viewIndex()
    {
        return view('site.home');
    }

    public function viewSobre ()
    {
        return 'viewSobre';
    }
    public function viewOrcamento ()
    {
        return 'viewOrcamento';
    }
    public function viewContato ()
    {
        return 'viewContato';
    }

}