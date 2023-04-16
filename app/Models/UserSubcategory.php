<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubcategory extends Model
{
    use HasFactory;

    protected $table = 'user_subcategories';

    protected $fillable = ['user_id', 'subcategory_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
