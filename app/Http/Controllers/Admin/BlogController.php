<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\SlugHelper;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.index', [
            "blogs" => $blogs
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = SlugHelper::generateUniqueSlug(Blog::class, $request->title);
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->short_description = $request->short_description;
        $blog->content = $request->content;
        $blog->published_at = $request->published_at;
        $blog->is_active = $request->is_active ?? true;
        
        $blog->save();

        if ($request->hasFile('banner_image')) {
            $blog->clearMediaCollection('banner');
            $blog->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        }

        return redirect()->to(route('blog.index'));
    }

    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blog.edit', [
            "blog" => $blog
        ]);
    }

    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->title !== $request->title) {
            $blog->slug = SlugHelper::generateUniqueSlug(Blog::class, $request->title);
        }
        $blog->title = $request->title;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->short_description = $request->short_description;
        $blog->content = $request->content;
        $blog->published_at = $request->published_at;
        $blog->is_active = $request->is_active ?? true;
        
        $blog->update();

        if ($request->hasFile('banner_image')) {
            $blog->clearMediaCollection('banner');
            $blog->addMedia($request->banner_image)->usingFileName(SlugHelper::imageSlugName($request->banner_image))->toMediaCollection('banner');
        }

        return redirect()->to(route('blog.index'));
    }

    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id)->delete();
        if ($blog){
            return response()->json(['status' => "success",'message' => 'Silme Başarılı!']);
        } else {
            return response()->json(['status' => "error",'message' => 'Kayıt Silinemedi!']);
        }
    }
}
