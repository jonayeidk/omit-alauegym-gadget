<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Toastr;
use App\Models\BlogCategory;
use App\Models\Blog;
use Image;
use File;
class BlogController extends Controller
{
   

    public function blogcategory_all()
    {
        $data = BlogCategory::orderBy('id','DESC')->get();
        return view('backEnd.blogcategory.index',compact('data'));
    }
    public function blogcategory_create()
    {
      
        return view('backEnd.blogcategory.create');
    }
    public function blogcategory_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);
        
         $blogcategory= new BlogCategory();
         $blogcategory->name=$request->name;
         $blogcategory->slug=Str::slug($request->name);
         $blogcategory->status=$request->status;
         $blogcategory->save();
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('blogcategory.all');
    }
    
    public function blogcategory_edit($id)
    {
        $edit_data = BlogCategory::find($id);
        return view('backEnd.blogcategory.edit',compact('edit_data'));
    }
    
    public function blogcategory_update(Request $request,$id)
    {
        
         $update_data = BlogCategory::find($id);
         $update_data->name=$request->name;
         $update_data->slug=Str::slug($request->name);
         $update_data->status=$request->status;
         $update_data->save();

        Toastr::success('Success','Data update successfully');
        return redirect()->route('blogcategory.all');
    }
 
    
   
    public function blogcategory_delete(Request $request,$id)
    {
        $delete_data = BlogCategory::find($id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
    
    //blog 
    public function blog_all()
    {
        $data = Blog::orderBy('id','DESC')->get();
        return view('backEnd.blog.index',compact('data'));
    }
    public function blog_create()
    {
      
        $data = BlogCategory::where('status',1)->get();
        return view('backEnd.blog.create',compact('data'));
    }
    
    public function blog_store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'blog_category_id' => 'required',
            'short_desc' => 'required',
            'long_desc' => 'required',
            'status' => 'required',
        ]);
        
        

        
        
         $blog= new Blog();
         $blog->title=$request->title;
         $blog->slug=Str::slug($request->title);
         $blog->blog_category_id=$request->blog_category_id;
         $blog->short_desc=$request->short_desc;
         $blog->long_desc=$request->long_desc;
         $blog->status=$request->status;
         $blog->save();
         
          if (!empty($request->file('blog_pic'))) {
         $ext=$request->file('blog_pic')->getClientOriginalExtension();
         $file=$request->file('blog_pic');
         $randomStr=date('Ymdhis').Str::random(20);
         $filename=strtolower($randomStr). '.'.$ext;
         $file->move('upload/blog/',$filename);
         $blog->blog_pic=$filename;
         $blog->save();
        }
        
        
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('blog.all');
    }
    
    public function blog_edit($id)
    {
         $edit_data = Blog::find($id);
         $data = BlogCategory::where('status',1)->get();
         return view('backEnd.blog.edit',compact('edit_data','data'));
    }
    
     public function blog_update(Request $request,$id)
    {
       
        
        

        
        
         $blog=  Blog::find($id);
         $blog->title=$request->title;
         $blog->slug=Str::slug($request->title);
         $blog->blog_category_id=$request->blog_category_id;
         $blog->short_desc=$request->short_desc;
         $blog->long_desc=$request->long_desc;
         $blog->status=$request->status;
         $blog->save();
         
          if (!empty($request->file('blog_pic'))) {
         $ext=$request->file('blog_pic')->getClientOriginalExtension();
         $file=$request->file('blog_pic');
         $randomStr=date('Ymdhis').Str::random(20);
         $filename=strtolower($randomStr). '.'.$ext;
         $file->move('upload/blog/',$filename);
         $blog->blog_pic=$filename;
         $blog->save();
        }
        
        
        Toastr::success('Success','Data Update successfully');
        return redirect()->route('blog.all');
    }
    
    
    public function blog_delete(Request $request,$id)
    {
        $delete_data = Blog::find($id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
    
    
}