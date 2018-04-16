<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ecom_product extends Model
{
    protected $fillable = ['title','product_desc','category_id','sub_category','brand_name','timing','occation_id','unit','price','discount','tax','total_price','sku_id','quantity','item_image1','item_image2','item_image3','item_image4'];
}
