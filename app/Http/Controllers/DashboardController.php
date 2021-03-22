<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Note;
use App\Models\Todo;
use App\Models\Website;
use App\Models\Image;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $notes = Note::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $todos = Todo::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->first();
        $websites = Website::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->get();
        $images= Image::where('user_id', auth()->user()->id)->orderBy('id', 'DESC')->paginate(4);;
        return view('dashboard',[
            'notes' => $notes,
            'todos' => $todos,
            'websites' => $websites,
            'images' => $images
        ]);
    }

    public function store(Request $request)
    {

        if ($request->filled('notes'))  {
            $request->user()->notes()->create($request->only('notes'));
        }

        if ($request->filled('todos')) {
            $request->user()->todos()->create($request->only('todos'));
        }

        if ($request->filled('website')) {
            $request->validate(['website'=>'required|url']);
            $request->user()->websites()->create($request->only('website'));
        }

        if ($request->filled('images')) {
            $request->validate(['images'=>'mimes:jpeg,jpg,png,gif|required']);

            $file = $request->only(images);
            $file->move('uploads', $file->getClientOriginalName());


            $request->user()->images()->create('uploads/'.$file->getClientOriginalName());
        }

        return back();
    }
}
