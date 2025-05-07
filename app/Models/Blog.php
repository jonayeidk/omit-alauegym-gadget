<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
class Blog extends Model
{
    protected $table ='blog';


    static public function getSingle($id)
    {
        return Blog::find($id);
    }


    public function getBlogPic()
    {
    if (!empty($this->blog_pic	) && file_exists('upload/blog/'.$this->blog_pic))
     {
        return url('upload/blog/'.$this->blog_pic);
    }else
    {
   return "";
    }
    }



     public function getCratedBy(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id');
    }


   

}
