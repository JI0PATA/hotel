<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index($id)
    {
        $photos = Photo::where('hotel_id', $id)->orderByDesc('id')->get();

        return view('modules.photos.index', [
            'photos' => $photos,
            'hotel_id' => $id
        ]);
    }

    public function create(Request $request, $id)
    {
        foreach($request->file as $file)
        {
            if ($file->getClientMimeType() === 'image/png' || $file->getClientMimeType() === 'image/jpeg') {
                $file_name = $id.'_'.md5($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('img/hotels/gallery'), $file_name);
                Photo::create([
                    'hotel_id' => $id,
                    'img' => $file_name,
                ]);
            } else {
                createMsg(0, 'Некоторые файлы не были загружены');
            }
        }

        return back();
    }

    public function delete($id)
    {
        Photo::find($id)->delete();
        createMsg(1, 'Фотография удалена!');
        return back();
    }
}
