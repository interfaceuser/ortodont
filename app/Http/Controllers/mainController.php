<?php

namespace App\Http\Controllers;

use App\service;
use App\slider;

class mainController extends Controller
{
    public function index()
    {
        $slider = slider::where('name', 'top')->orderBy('order_id', 'desc')->get();
        $services = service::orderBy('order_id', 'desc')->get();
        return view('main', ['top_slider' => $slider, 'services' => $services]);
    }
}