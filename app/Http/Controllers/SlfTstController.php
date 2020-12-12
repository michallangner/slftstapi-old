<?php

namespace App\Http\Controllers;

#use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function findAllTests()
    {
        $all_docs = $client->getAllDocs();
        echo "Database got ".$all_docs->total_rows." documents.<BR>\n";
        foreach ( $all_docs->rows as $row ) {
            echo "Document ".$row->id."<BR>\n";
        }
        return response()->json(Author::all());
    }

    public function findTest($id)
    {
        return response()->json(Author::find($id));
    }

    public function create(Request $request)
    {
        $author = Author::create($request->all());

        return response()->json($author, 201);
    }

    public function update($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}