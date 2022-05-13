<?php

namespace App\Http\Controllers;
use App\Models\Screen;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
    //show all screens
    public function index()
    {
        return Screen::all();
    }
    //get screen by id
    public function getScreenById($id)
    {
        return Screen::find($id);
    }

    //show with seats
    public function showWithSeats()
    {
        return Screen::with('seat')->get();
    }

    // To get all Movies by screen
        public function getScreenMovies()
        {
            return Screen::with('movies')->get();
        }
    
    // To get all Movies by screen by Id
    public function getScreenMoviesById($screen_id)
    {
        return Screen::find($screen_id)->movies;
    }

    

    // Store a screen
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string',
        ]);

        $screen = Screen::create(array_merge($attributes,[
            "slug" => Str::slug(request('name'))
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Screen added successfully',
            'data' => $screen
        ]);
    }

      // Updates a screen
      public function update($id)
      {
          $screen = Screen::where('id', $id)->first();
  
          if (!$screen) {
              return response()->json([
                  'success' => false,
                  'message' => 'screen not found with an id of ' . $id
              ]);
          }
  
          $attributes = request()->validate([
              'name' => $screen->exists ? '' : 'required',
          ]);
  
          $screen->update(array_merge($attributes,["slug" => Str::slug(request('name'))
        ]));
  
          return response()->json([
              'success' => true,
              'message' => 'Screen updated successfully',
              'data' => $screen
          ]);;
      }
       // Delete a screen
    public function destroy($id)
    {
        $screen = Screen::where('id', $id)->first();

        if (!$screen) {
            return response()->json([
                'success' => false,
                'message' => 'screen not found with an id of ' . $id
            ]);
        }

        $screen->delete();

        return response()->json([
            'success' => true,
            'message' => 'screen deleted successfully',
        ]);
    }
}
