<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    /**
     * Get the options for generating the slug.
     */
    // public function getSlugOptions(): SlugOptions
    // {
    //     return SlugOptions::create()
    //         ->generateSlugsFrom('judul')
    //         ->saveSlugsTo('slug');
    // }

    public function detail_buku()
    {
        return $this->hasMany(DetailBuku::class);
    }
}
