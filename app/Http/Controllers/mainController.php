<?php

namespace App\Http\Controllers;

use App\crew;
use App\param;
use App\service;
use App\slider;

class mainController extends Controller
{
    public function index()
    {
        $slider = slider::where('name', 'top')->orderBy('order_id', 'desc')->get();
        $services = service::orderBy('order_id', 'desc')->get();
        $crew = crew::orderBy('order_id', 'desc')->get();
        $param = param::toList(param::where('par_group', 'common')->get()->toArray());
        return view('main', ['top_slider' => $slider, 'services' => $services, 'crew' => $crew, 'param' => $param]);

    }
    /**
     * принимает данные отправленные формой по запросу обратного звонка
     * формирует письмо из них и отправляет его на служебную почту
     */
    public function callbackRequest()
    {

    }
    /**
     * получает данные отправленные формой для записи на прием
     * формирует из них письмо и отправляет его на служебную почту
     */
    public function vizitRequest()
    {

    }
}