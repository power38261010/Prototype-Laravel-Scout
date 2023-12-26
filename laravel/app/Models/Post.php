<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['title', 'content'];

    // Define searchable attributes
    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }
}
