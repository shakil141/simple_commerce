<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tbl_products';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'category_id',
        'menufacture_id',
        'product_short_description',
        'product_long_description',
        'product_price',
        'product_size',
        'product_image',
        'product_color',
        'publication_status'
    ];


    public function getPublicationStatusAttribute($value)
    {
        if($value ==ApplicationConstant::ACTIVE)
        {
            return 'Active';
        }
        else{
            return 'In Active';
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function manufacture()
    {
        return $this->belongsTo(Menufacture::class,'menufacture_id');
    }
}
