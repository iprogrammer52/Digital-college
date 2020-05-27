<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('root');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add_news');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();

        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
        ]);

        $imageName = [];

        if (!empty($request->images)) {
            for ($i = 0; $i < count($request->images); $i++) {
                $imageName[$i] = $request->images[$i]->store('news', 'public');
            }
            $images = json_encode($imageName);
        } else {
            $images = '';
        }
        $status = $news
            ->create([
                'title'   => $request['title'],
                'body'    => $request['body'],
                'for_all' => $request->for_all ?? '',
                'images'  => $images,
            ])
            ->save();
            $status = false;
        if ($status) {
            return redirect('home')->with('alert', ['type' => 'success', 'text' => 'новость создана']);
        } else {
            return redirect('home')->with('alert', ['type' => 'danger', 'text' => 'произошла ошибка']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        if (!empty($news)) {
            $news->images = json_decode($news->images);
            return view('news', ['news' => $news]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
