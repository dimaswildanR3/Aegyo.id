<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\articles;

class article extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'title'       => 'required',
            'description' => 'required',
            'content'     => 'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors());
        }
        
        $articles = new articles();
        $articles->category_id= $request-> category_id;
        $articles->title = $request->title;
        $articles->description = $request->description;
        $articles->content = $request->content;
        
        $articles->save();
        
        $data = articles::where('id', '=', $articles->id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Data articles berhasil ditambahkan',
            'data' => $data
        ]);
    }public function getAll()
    {
        $data = articles::get();        
        return response()->json($data);
    }
    
    public function getById($id)
    {
        $data = articles::where('id', '=', $id)->first();        
        return response()->json($data);
    }
    
    public function update(Request $request, $id)
    {
      $validator = Validator::make($request->all(), [
        'category_id' => 'required',
        'title'       => 'required',
        'description' => 'required',
        'content'     => 'required',
        ]);
    
        if($validator->fails()) {
            return response()->json($validator->errors());
        }
  
        $articles = new articles();
        $articles->category_id= $request-> category_id;
        $articles->title = $request->title;
        $articles->description = $request->description;
        $articles->content = $request->content;
        $articles->save();
  
        return response()->json([
            'success' => true,
            'message' => 'Data articles berhasil diubah'
        ]);        
    }
  
    public function delete($id)
    {
        $delete = articles::where('id', '=', $id)->delete();
  
        if($delete) {
            return response()->json([
                'success' => true,
                'message' => 'Data articles berhasil dihapus'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data articles gagal dihapus'
            ]);            
        }
    }
}
