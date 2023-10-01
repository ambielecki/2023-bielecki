<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller {
    public function index(Request $request): View {
        $current_year = date('Y');
        $start_year = date('Y', strtotime('2016-05-01'));
        $years = (int) $current_year - (int) $start_year;

        return view('home.home', ['years' => $years]);
    }
}
