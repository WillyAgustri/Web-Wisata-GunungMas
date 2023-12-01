<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Models\hotel;
use App\Models\wisata;

class ClientDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($Id_wisata)
    {
        $get_detail_data = Wisata::join('tb_galeri', 'tb_wisata.Id_wisata', '=', 'tb_galeri.Id_wisata')
            ->select('tb_wisata.*', 'tb_galeri.Foto')
            ->where('tb_wisata.Id_wisata', $Id_wisata)
            ->first();

        $get_foto_data = Galeri::where('Id_wisata', $Id_wisata)
            ->select('Foto')
            ->get();

        $get_wisata_latitude = Wisata::where('Id_wisata', $Id_wisata)->value('Latitude');
        $get_wisata_longitude = Wisata::where('Id_wisata', $Id_wisata)->value('Longitude');

        $get_hotels_data = Hotel::select('Gambar', 'Nama_hotel', 'Id_hotel', 'Latitude', 'Longitude')->get();

        function haversineDistance($lat1, $lon1, $lat2, $lon2)
        {
            $earthRadius = 6371; // Radius bumi dalam kilometer

            $dLat = deg2rad($lat2 - $lat1);
            $dLon = deg2rad($lon2 - $lon1);

            $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

            $distance = $earthRadius * $c;

            return $distance;
        }

        // Hitung jarak dan tambahkan ke koleksi hotel
        $get_hotels_data = $get_hotels_data->map(function ($hotel) use ($get_wisata_latitude, $get_wisata_longitude) {
            $hotel->distance = haversineDistance($get_wisata_latitude, $get_wisata_longitude, $hotel->Latitude, $hotel->Longitude);

            return $hotel;
        });

        // Urutkan koleksi berdasarkan jarak terdekat
        $get_hotels_data = $get_hotels_data->sortBy('distance');

        return view('detail_wisata', compact('get_detail_data', 'get_foto_data', 'get_hotels_data'));
    }
}