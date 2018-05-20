<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Room;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function view($id)
    {
        $hotel = Hotel::with(['rooms', 'services', 'price', 'photos'])->find($id);

        return view('modules.hotels.view', [
            'hotel' => $hotel
        ]);
    }

    public function index(Request $request)
    {
        $hotels = Hotel::orderByDesc('id');

        if ($request->get('search'))
            $hotels->where('name', 'LIKE', '%'.$request->get('search').'%')
            ->orWhere('city', 'LIKE', '%'.$request->get('search').'%');

        $hotels = $hotels->get();

        $hotel_name = DB::table('hotels')
            ->selectRaw('DISTINCT name');
        $autocomplete = DB::table('hotels')
            ->selectRaw('DISTINCT city')
            ->union($hotel_name)
            ->orderBy('city')
            ->get();


        return view('modules.hotels.index', [
            'hotels' => $hotels,
            'autocomplete' => $autocomplete,
        ]);
    }

    public function add()
    {
        $services = Service::orderBy('name')->get();
        $rooms = Room::all();

        return view('modules.hotels.add', [
            'services' => $services,
            'rooms' => $rooms
        ]);
    }

    public function create(Request $request)
    {

        if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
            $request->file->move(public_path('img/hotels'), md5($request->file->getClientOriginalName()).'.'.$request->file->getClientOriginalExtension());
        } else {
            createMsg(0, 'Неверное расширение файла!');
            $request->flash();
            return back();
        }

        if (empty($request->services)) {
            createMsg(0, 'Выберите хотя бы одну услугу');
            $request->flash();
            return back();
        }

        if (empty($request->rooms)) {
            createMsg(0, 'Выберите хотя бы одну комнату');
            $request->flash();
            return back();
        }

        $hotel = Hotel::create([
            'name' => $request->name,
            'star_count' => $request->star_count,
            'city' => $request->city,
            'address' => $request->address,
            'description' => $request->description,
            'img' => md5($request->file->getClientOriginalName()).'.'.$request->file->getClientOriginalExtension()
        ]);

        $hotel->services()->attach($request->services);

        foreach($request->rooms as $key => $value)
            if ($value !== null)
                $hotel->rooms()->attach($key + 1, ['price' => $value]);

        return redirect()->route('admin.hotels.index');
    }

    public function edit($id)
    {
        $hotel = Hotel::with(['price', 'services'])->find($id);
        $services = Service::orderBy('name')->get();
        $rooms = Room::all();

        return view('modules.hotels.edit', [
            'hotel' => $hotel,
            'services' => $services,
            'rooms' => $rooms
        ]);
    }

    public function update(Request $request, $id)
    {
        if (empty($request->services)) {
            createMsg(0, 'Выберите хотя бы одну услугу');
            $request->flash();
            return back();
        }

        if (empty($request->rooms)) {
            createMsg(0, 'Выберите хотя бы одну комнату');
            $request->flash();
            return back();
        }

        $hotel = Hotel::find($id);

        if ($request->file !== null) {
            if ($request->file->getClientMimeType() === 'image/png' || $request->file->getClientMimeType() === 'image/jpeg') {
                $request->file->move(public_path('img/hotels'), md5($request->file->getClientOriginalName()).'.'.$request->file->getClientOriginalExtension());
                $hotel->img = md5($request->file->getClientOriginalName()).'.'.$request->file->getClientOriginalExtension();
            } else {
                createMsg(0, 'Неверное расширение файла!');
                $request->flash();
                return back();
            }
        }

        $hotel->update([
            'name' => $request->name,
            'star_count' => $request->star_count,
            'city' => $request->city,
            'address' => $request->address,
            'description' => $request->description
        ]);

        $hotel->services()->sync($request->services);

        $hotel->rooms()->detach();
        foreach($request->rooms as $key => $value)
            if ($value !== null)
                $hotel->rooms()->attach($key + 1, ['price' => $value]);

        return back();
    }

    public function delete($id)
    {
        Hotel::find($id)->delete();
        createMsg(1, 'Отель удалён');
        return back();
    }

}
