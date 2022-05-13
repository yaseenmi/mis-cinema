<?php

namespace App\Http\Controllers;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index()
    {
        return Seat::all();
    }

    public function showWithScreen()
    {
        return Seat::with('screen')->get();
    }

    // Store a seat
    public function store(Request $request)
    {
        $request->validate([
            'seat_number' => "required",
            'row_number' => "required",
            'isReserved' => "required",
            'screen_id' => "required",
        ]);

        $seat = Seat::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Seat added successfully',
            'data' => $seat
        ]);
    }
      // Updates a seat

      public function update(Request $request, $id)
      {
        $seat = Seat::find($id);
        $seat->update($request->all());

          $request->validate([
            'seat_number' => $seat->exists ? '' : 'required',
            'row_number' => $seat->exists ? '' : 'required',
            'isReserved' => $seat->exists ? '' : 'required',
          ]);

          return response()->json([
            'success' => true,
            'message' => 'seat updated successfully',
            'data' => $seat
        ]);;;
      }

       // Delete a screen
    public function destroy($id)
    {
        $seat = Seat::where('id', $id)->first();

        if (!$seat) {
            return response()->json([
                'success' => false,
                'message' => 'seat not found with an id of ' . $id
            ]);
        }

        $seat->delete();

        return response()->json([
            'success' => true,
            'message' => 'seat deleted successfully',
        ]);
    }
}
