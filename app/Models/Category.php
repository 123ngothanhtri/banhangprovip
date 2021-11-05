<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Category extends Model
{
    use HasFactory;
    protected $table='category';
    protected $primaryKey = 'id_category';
    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function childrenCategories()
{
    return $this->hasMany(Category::class)->with('categories');
}

}
