<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Authors;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    
   
public function Authors(){
    return Authors::all();
}

public function getAuthorsbyId(Request $request, $id)
{
    $result = DB::select("SELECT * FROM authors WHERE id = $id");
    if(empty($result)){
        return response()->json(['message'=> 'Authors Not Found'], 404);
    }
    else{
    return $result;
    }
}

public function AuthorsAdd(Request $request){
    $this->validate($request, [
        'name' => 'required',
        'gender' => 'required',
        'biography' => 'required'
    ]);

    $authors = Authors::create(
        $request->only(['name', 'gender', 'biography'])
    );

    return response()->json([
        'created' => true,
        'data' => $authors
    ], 201);
}

public function AuthorsUpdate(Request $request, $id){
    try {
        $authors = Authors::findOrFail($id);
    } catch (ModelNotFoundException $e) {
        return response()->json([
            'message' => 'Authors not found'
        ], 404);
    }

    $authors->fill(
        $request->only(['name', 'gender', 'biography'])
    );
    $authors->save();

    return response()->json([
        'updated' => true,
        'data' => $authors
    ], 200);
}

public function AuthorsDestroy($id){
    try {
        $authors = Authors::findOrFail($id);
    } catch (ModelNotFoundException $e) {
        return response()->json([
            'error' => [
            'message' => 'Authors not found'
            ]
        ], 404);
    }
    $authors->delete();
    return response()->json([
        'deleted' => true
    ], 200);
}

    


    
}