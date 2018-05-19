<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('modules.services.index', [
            'services' => $services,
        ]);
    }

    public function add()
    {
        return view('modules.services.add');
    }

    public function create(Request $request)
    {
        $service = Service::create([
            'name' => $request->name
        ]);

        createMsg(1, 'Услуга успешно добавлена!');
        return back();
    }

    public function edit($id)
    {
        $service = Service::find($id);

        return view('modules.services.edit', [
            'service' => $service,
        ]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        $service->update([
            'name' => $request->name,
        ]);

        createMsg(1, 'Услуга успешно обновлена!');
        return redirect()->route('admin.services.index');
    }

    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();

        createMsg(1, 'Услуга успешно удалена!');
        return redirect()->route('admin.services.index');
    }
}
