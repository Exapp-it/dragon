<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Inertia\Inertia;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return Inertia::render('Admin/News/Index', [
            'title' => __('Новости'),
            'newsList' => $news,
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/News/Create', [
            'title' => __('Добавить новость'),
        ]);

    }
}
