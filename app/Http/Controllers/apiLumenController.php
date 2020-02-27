<?php

namespace App\Http\Controllers;

use App\ModelApiLumen;
use Illuminate\Http\Request;

class apiLumenController extends Controller
{
    /** show all apilumen */
    public function showAll()
    {
        $data = ModelApiLumen::all();
        return response($data);
    }

    /** show one apilumen by id */
    public function showOne($id)
    {
        $data = ModelApiLumen::where('id', $id)->get();
        return response($data);
    }

    /** create new apilumen */
    public function createOne(Request $request)
    {
        $data = new ModelApiLumen();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('create successfully');
    }

    /** update or edit apilumen by id */
    public function updateOne(Request $request, $id)
    {
        $data = ModelApiLumen::where('id', $id)->first();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('updated successfully');
    }

    /** delete one apilumen by id */
    public function deleteOne($id)
    {
        $data = ModelApiLumen::where('id', $id)->first();
        $data->delete();

        return response('delete successfully');
    }
}