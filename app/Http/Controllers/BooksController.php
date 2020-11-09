<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Authors;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    
    public function index()
    {
        return Book::all();
    }
    
    public function getBookbyId($id){
        $book = DB::table('books')->where('id', $id)->first();
        if($book){
            return response()->json(['message'=>'Success', 'data'=>$book], 200);
        }else{
            return response()->json(['message'=>'Book not found'], 404);
        }

    }

    public function BookStore(Request $request)
  {
        $this->validate($request, [
        'title' => 'required',
        'description' => 'required',
        'author' => 'required'
        ]);

        $book = Book::create(
        $request->only(['title', 'description', 'author'])
        );

        return response()->json([
        'created' => true,
        'data' => $book
        ], 201);
  }

  public function BookUpdate(Request $request, $id){
    try {
    $book = Book::findOrFail($id);
    } catch (ModelNotFoundException $e) {
    return response()->json([
        'message' => 'book not found'
    ], 404);
    }

    $book->fill(
    $request->only(['title', 'description', 'author'])
    );
    $book->save();

    return response()->json([
    'updated' => true,
    'data' => $book
    ], 200);
}

public function Bookdestroy($id){
    try {
    $book = Book::findOrFail($id);
    } catch (ModelNotFoundException $e) {
    return response()->json([
        'error' => [
        'message' => 'book not found'
        ]
    ], 404);
    }

    $book->delete();

    return response()->json([
    'deleted' => true
    ], 200);
}

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