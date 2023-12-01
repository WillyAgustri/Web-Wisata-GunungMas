<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function edit_index($Id_hotel)
    {
        $hotel_data = hotel::find($Id_hotel);

        return view('dashboard.kelola_hotel.edit-hotel', compact('hotel_data'));
    }

    public function index()
    {
        $hotel_data = hotel::paginate('5');

        return view('dashboard.kelola_hotel.kelola-hotel', compact('hotel_data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hotel_data = $request->validate([
                   'Nama_hotel' => 'required',
                   'Longitude' => 'required',
                   'Latitude' => 'required',
               ]);

        $hotel_data['Longitude'] = $request->input('Longitude');
        $hotel_data['Latitude'] = $request->input('Latitude');

        if ($request->gambar) {
            $imageName = time().'.'.$request->file('gambar')->extension();
            $request->file('gambar')->move(public_path('images'), $imageName);
            $hotel_data['gambar'] = $imageName;
        } else {
            $hotel_data['gambar'] = 'Tidak Ada Gambar';
        }
        if ($hotel_data) {
            hotel::create($hotel_data);

            return redirect()->route('dashboard.hotel.index');
        }

        return redirect()->back();
    }

    public function update(Request $request, $Id_hotel)
    {
        $hotel_data = $request->validate([
            'Nama_hotel' => 'required',
        ]);

        $hotel_data['Longitude'] = $request->input('Longitude');
        $hotel_data['Latitude'] = $request->input('Latitude');

        $get_hotel_data = hotel::find($Id_hotel);

        if ($request->gambar) {
            $imageName = time().'.'.$request->file('gambar')->extension();
            $request->file('gambar')->move(public_path('images'), $imageName);
            $hotel_data['gambar'] = $imageName;
        } else {
            $hotel_data['gambar'] = $get_hotel_data['gambar'];
        }

        if ($get_hotel_data) {
            $get_hotel_data->update($hotel_data);

            return redirect()->route('dashboard.hotel.index');
        }

        return redirect()->back();
    }

    public function destroy($Id_hotel)
    {
        hotel::find($Id_hotel);
        hotel::destroy($Id_hotel);

        return redirect()->back();
    }
}