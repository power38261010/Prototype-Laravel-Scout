<?php


namespace App\Models;


use App\Http\Helpers\ImagesHelper;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Image extends Model
{
    use Searchable;
    const CREATED_AT = 'date_insert';
    const UPDATED_AT = 'date_update';

    /** @var string  */
    protected $table = 'cms_image';

    /** @var string[]  */
    protected $dates = ['date_available', 'date_upload'];

    /** @var string[]  */
    protected $casts = [
        'published' => 'boolean',
        'show_on_search' => 'boolean',
        'alternative_thumb_cut' => 'boolean'
    ];


    /**
     * Get the name of the index associated with the model.
     */
    public function searchableAs(): string {
        return 'images_index';
    }

    public function toSearchableArray() {
        return [
            'image' => $this->image,
            'title' => $this->title,
            'slug' => $this->slug,
            'path_legacy' => $this->path_legacy,
        ];
    }

    // /**
    //  * Get the filterable attributes for the model.
    //  *
    //  * @return array
    //  */
    // public function getScoutKey()
    // {
    //     return $this->slug;
    // }
}
