<?php

namespace App\Http\Controllers;

use App\Authors;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /** show all authors */
    public function showAll()
    {
        return response()->json(Authors::all());
    }

    /** show one authors by id */
    public function showOne($id)
    {
        return response()->json(Authors::find($id));
    }

    /** create new authors */
    public function createOne(Request $request)
    {
        $this->validate($request, [
            'name_authors' => 'required',
            'email_authors' => 'required|email|unique:users',
            'location_authors' => 'required|alpha'
        ]);

        $author = Authors::create($request->all());
        return response()->json($author, 201);
    }

    /** delete one authors by id */
    public function deleteOne($id)
    {
        Authors::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    /** update or edit authors by id */
    public function updateOne($id, Request $request)
    {
        $author = Authors::findOrFail($id);
        $author->update($request->all());
    }
}
