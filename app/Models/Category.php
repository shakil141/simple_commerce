<?php

namespace App\Models;

use App\Constants\ApplicationConstant;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $table = 'categories';

    protected $perPage = 10;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'category_description',
        'publication_status',
        'created_by',
        'updated_by'
    ];

    public function scopeActive($query)
    {
       return  $query->where('publication_status',1);
    }

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
