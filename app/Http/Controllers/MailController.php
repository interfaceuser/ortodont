<?php

namespace App\Http\Controllers;

use App\param;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    /**
     * принимает данные отправленные формой по запросу обратного звонка
     * формирует письмо из них и отправляет его на служебную почту
     */
    public function callbackRequest(Request $r)
    {

        $data['name'] = $r->name;
        $data['phone'] = $r->phone;
        Mail::plain('mail.callback', $data, function ($message) {
            $param = param::toList(param::where('par_group', 'common')->get()->toArray());
            $message->to($param['email'], 'John Doe');

            $message->subject('Subject');

        });
        return '';

    }
    /**
     * получает данные отправленные формой для записи на прием
     * формирует из них письмо и отправляет его на служебную почту
     */
    public function vizitRequest()
    {
        $data['name'] = $r->name;
        $data['phone'] = $r->phone;
        $data['email'] = $r->email;
        $data['date'] = $r->datapriema;
        $data['time'] = $r->time;
        $data['vidpriema'] = $r->vidpriema;
        $data['phone'] = $r->sposob;
        Mail::plain('mail.callback', $data, function ($message) {
            $param = param::toList(param::where('par_group', 'common')->get()->toArray());
            $message->to($param['email'], 'John Doe');

            $message->subject('Subject');

        });
        return '';
    }
}