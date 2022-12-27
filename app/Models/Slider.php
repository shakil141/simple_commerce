<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Constants\ApplicationConstant;
class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'slider_img',
        'publication_status'
    ];

    protected $perPage = 3;

    public function getPublicationStatusAttribute($value)
    {
        if($value == ApplicationConstant::ACTIVE)
        {
            return 'Active';
        }
        else
        {
            return 'In Active';
        }
    }

}
