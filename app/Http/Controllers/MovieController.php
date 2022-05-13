<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Screen;
use App\Models\MovieScreen;
use App\Models\Time;


class MovieController extends Controller
{
    //show all movies
    public function index()
    {
        return Movie::all();
    }

    public function create()
    {
        return view('admin.movie.create');
    }
    public function detail()
    {
        return view('admin.movie.detail');
    }
    public function show()
    {
        return view('movie.show');
    }

    // To get all screens of a movie
    public function getMovieScreens()
    {
        return Movie::with('screens')->get();
    }
    public function getMovieScreensWithTime()
    {
        return Movie::with('time', 'screens')->get();
    }
    public function getMovieTime()
    {
        return Movie::with('time')->get();
    }
    // To get all screens of a movie by id
    public function getMovieScreensById($movie_id)
    {
        return Movie::find($movie_id)->screens;
    }

    // Store a movie
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg,bmp',
            'description' => 'required|string',
            'price' => 'required',
            'type' => 'required',
            'start' => 'required',
            'end' => 'required',
            'screen_id' => 'required',
        ]);

        $uniqueImageName = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $uniqueImageName);
        $movie = Movie::create([
            "slug" => Str::slug(request('name')),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'image' => $uniqueImageName,
        ]);
        $time = Time::create([
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'movie_id' => $movie->id
        ]);

        $movie_screen = MovieScreen::create([
            "screen_id" => $request->input('screen_id'),
            "movie_id" => $movie->id,
        ]);
        return response()->json([
            'success' => true,
            'message' => 'movie added successfully',
            'data' => [$movie, $movie_screen, $time],
        ]);
    }

    // Updates a movie
    public function update($id, Request $request)
    {
        $movie = Movie::where('id', $id)->first();

        if (!$movie) {
            return response()->json([
                'success' => false,
                'message' => 'movie not found with an id of ' . $id
            ]);
        }

        $request->validate([
            'name' => $movie->exists ? '' : 'required',
            'description' => $movie->exists ? '' : 'required',
            'price' => $movie->exists ? '' : 'required',
            'type' => $movie->exists ? '' : 'required',
            'start' => $movie->exists ? '' : 'required',
            'end' => $movie->exists ? '' : 'required',

        ]);

        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->type = $request->type;
        $movie->price = $request->price;
        $movie->slug = Str::slug(request('name'));

        //$time->start = $request->start;
        //$time->end = $request->end;

        //$movie_screen->screen_id = $request->screen_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '-' . $request->name . '.' . $request->image->extension();
            $image->move(public_path('images'), $filename);
            $movie->image = $request->file('image')->getClientOriginalName();
        } else {
            response()->json([
                'error' => 'error'
            ]);;
        }
        $movie->update();

        return response()->json([
            'success' => true,
            'message' => 'movie updated successfully',
            'data' => $movie
        ]);;
    }
    // Delete a screen
    public function destroy($id)
    {
        $movie = Movie::where('id', $id)->first();

        if (!$movie) {
            return response()->json([
                'success' => false,
                'message' => 'movie not found with an id of ' . $id
            ]);
        }

        $movie->delete();

        return response()->json([
            'success' => true,
            'message' => 'movie deleted successfully',
        ]);
    }
}
