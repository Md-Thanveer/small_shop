<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands'; // Define the table name if it's different from the class name

    protected $fillable = [
        'name',
        'image_path'
        // Add other fillable attributes here
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function getImagePath()
    {
        return env('DOMAIN_URL').Storage::url($this->image_path);
    }


}
