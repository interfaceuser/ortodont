<?php

namespace App\Http\Controllers;

use App\cert;
use App\crew;
use App\feedback;
use App\gallery;
use App\menu;
use App\news;
use App\param;
use App\service;
use App\slider;
use App\tour;

class mainController extends Controller
{
    public function index()
    {
        $slider = slider::where('name', 'top')->orderBy('order_id', 'asc')->get();
        $services = service::orderBy('order_id', 'asc')->get();
        $crew = crew::orderBy('order_id', 'asc')->get();
        $param = param::toList(param::where('par_group', 'common')->get()->toArray());
        $cert = cert::orderBy('order_id', 'asc')->get();
        $gallery = gallery::orderBy('order_id', 'asc')->get();
        $news = news::orderBy('order_id', 'asc')->get();
        $tour = tour::orderBy('order_id', 'asc')->get();
        $feedback = feedback::orderBy('order_id', 'asc')->get();
        $menu = menu::where('name', 'top_menu')->orderBy('id', 'asc')->get()->toArray();
        $menutree = $this->getTree($menu);

        return view('main', ['top_slider' => $slider, 'services' => $services,
            'crew' => $crew, 'param' => $param, 'cert' => $cert, 'gallery' => $gallery, 'news' => $news,
            'tour' => $tour, 'feedback' => $feedback, 'menutree' => $menutree]);

    }
    /**
     * функция строит дерево меню из линейного массива выборки
     * взято со страницы https://bezramok-tlt.ru/?mode=2&post=21
     */
    private function getTree($dataset)
    {
        $tree = array();

        foreach ($dataset as $id => &$node) {

            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            } else {

                $dataset[((int) ($node['parent_id'])) - 1]['childs'][$id] = &$node;
            }
        }
        return $tree;
    }

}