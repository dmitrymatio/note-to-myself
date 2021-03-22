<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Note;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'notes' => 'required',
            'todos' => 'required'
        ]);

        $request->user()->notes()->create($request->only('notes'));
        $request->user()->todos()->create($request->only('todos'));

        return back();
    }
}
