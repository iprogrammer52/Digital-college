<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class HomeController extends Controller
{
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
        $news = new News();
        $news = $news->orderBy('created_at', 'desc')->get();

        // TODO: 19.05.2020 / Обдумать как можно заменить подобное решенение. Не самый эффективный алгоритм.
        foreach ($news as $item) {
            $item['images'] = json_decode($item['images']);
            if (!empty($item['images'][0])) {
                $item['images'] = $item['images'][0];
            }
        }
        
        return view('home', ['news' => $news]);
    }
}
