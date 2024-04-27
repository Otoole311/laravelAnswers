<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return "About us Page";
    }

    public function contact(){
        return "Contact us Page";
    }

    public function submitContact(){
        return "Submitted Contact";
    }
}
