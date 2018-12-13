<?php

namespace App\Http\Controllers;

use App\cert;
use App\crew;
use App\feedback;
use App\gallery;
use App\news;
use App\param;
use App\service;
use App\slider;
use App\tour;

class mainController extends Controller
{
    public function index()
    {
        $slider = slider::where('name', 'top')->orderBy('order_id', 'desc')->get();
        $services = service::orderBy('order_id', 'desc')->get();
        $crew = crew::orderBy('order_id', 'desc')->get();
        $param = param::toList(param::where('par_group', 'common')->get()->toArray());
        $cert = cert::orderBy('order_id', 'desc')->get();
        $gallery = gallery::orderBy('order_id', 'desc')->get();
        $news = news::orderBy('order_id', 'desc')->get();
        $tour = tour::orderBy('order_id', 'desc')->get();
        $feedback = feedback::orderBy('order_id', 'desc')->get();
        return view('main', ['top_slider' => $slider, 'services' => $services,
            'crew' => $crew, 'param' => $param, 'cert' => $cert, 'gallery' => $gallery, 'news' => $news,
            'tour' => $tour, 'feedback' => $feedback]);

    }

}