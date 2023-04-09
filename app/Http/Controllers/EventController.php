<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    /**
     * 登録画面表示用
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * 塘路港処理・登録画面表示用
     */
    public function store(Request $request)
    {
        Log::debug('イベント名:'. $request->get('title'));
        return to_route('events.create');
    }
}
