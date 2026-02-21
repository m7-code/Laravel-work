<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

use function Pest\Laravel\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['posts'] = Post::all();
        return response()->json([
            'status' => true,
            'message' => 'Posts Retrieved Successfully',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatePost = validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validatePost->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validatePost->errors()->all()
            ], 401);
        }

        $img = $request->image;
        $ext = $img->getClientOriginalExtension();
        $imageName = time() . '.' . $ext;
        $img->move(public_path(). '/uploads', $imageName);

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName ,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Post Created Successfully',
            'post' => $post
        ], 201);

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['post'] = Post::select('id', 'title', 'description', 'image')->where('id', $id)->get();
        return response()->json([
            'status' => true,
            'message' => 'Post Retrieved Successfully',
            'data' => $data
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatePost = validator::make($request->all(), [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validatePost->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validation error',
                'errors' => $validatePost->errors()->all()
            ], 401);
        }

        $postimage =Post::select('id','image')->where('id', $id)->get();
         if($request->image != ''){
            $path = public_path().'/uploads';

            if($postimage[0]->image !='' && $postimage[0]->image != null){
                $old_file = $path. $postimage[0]->image;
                if(file_exists($old_file)){
                    unlink($old_file);
                }
                
            }
            $img = $request->image;
        $ext = $img->getClientOriginalExtension();
        $imageName = time() . '.' . $ext;
        $img->move(public_path(). '/uploads', $imageName);
            
         }
         else{
            $imageName = $postimage[0]->image;
         }

        

        $post = Post::where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName ,
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Post Updated Successfully',
            'post' => $post
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imagepath = Post::select('image')->where('id', $id)->get();
         $filepath = public_path().'/uploads/'.$imagepath[0]['image'];
        unlink($filepath);
        
        $post = Post::where('id', $id)->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Post Deleted Successfully',
            'post' => $post
        ], 200);
    }
}
