<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
class BlogCategory extends Model
{
    protected $table ='blog_category';


    static public function getSingle($id)
    {
        return BlogCategory::find($id);
    }


    public function getBlogPic()
    {
    if (!empty($this->brand_pic) && file_exists('upload/brand/'.$this->brand_pic))
     {
        return url('upload/brand/'.$this->brand_pic);
    }else
    {
   return "";
    }
    }



    static public function getBlogCategory()
    {
        return self::select('blog_category.*')
      ->orderBy('blog_category.id','desc')
      ->get();

     
    }

   

}
