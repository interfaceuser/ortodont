<?php

namespace App\Http\Controllers;

use App\cert;
use App\crew;
use App\gallery;
use App\news;
use App\param;
use App\service;
use App\slider;
use App\tour;
use Mail;
use yii\web\Request;

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
        return view('main', ['top_slider' => $slider, 'services' => $services,
            'crew' => $crew, 'param' => $param, 'cert' => $cert, 'gallery' => $gallery, 'news' => $news,
            'tour' => $tour]);

    }
    /**
     * принимает данные отправленные формой по запросу обратного звонка
     * формирует письмо из них и отправляет его на служебную почту
     */
    public function callbackRequest(Request $r)
    {
        $param = param::toList(param::where('par_group', 'common')->get()->toArray());
        $data['name'] = $r->name;
        Mail::plain('mail.callback', $data, function ($message) {
            $message->to($param['email'], 'John Doe');

            $message->subject('Subject');

        });

    }
    /**
     * получает данные отправленные формой для записи на прием
     * формирует из них письмо и отправляет его на служебную почту
     */
    public function vizitRequest()
    {

    }
}