<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function movies()
    {
        return view('movies');
    }

    public function detail()

{
    $movie_title = 'Venom';
    $info_view = view('home/detail/info', [
        'title' => $movie_title
        ]);
    $cast_view = view('home/detail/cast');
    $trailer_view = view('home/detail/trailer');

    $main_view = view('home/detail/main', [
        'info' => $info_view,
        'cast' => $cast_view,
        'trailer' => $trailer_view
    ]);

    $html_wrapper = view('home/detail/html', [
        'content' => $main_view,
        'header' => view('home/header'),
        'footer' => view('home/footer')
    ]);
    return $html_wrapper;
}

}
