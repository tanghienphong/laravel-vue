<?php

namespace App\Modules\Product\Models;

use App\Models\Trackable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Trackable;

    protected $fillable = [
        'category_id',
        'name',
        'teaser',
        'sku',
        'slug',
        'teaser',
        'description',
        'image',
        'status',
        'sort_order',
        'price',
        'discount',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'created_id',
        'updated_id',
        'published_at'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_products';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => 'bail|required|numeric|digits_between:0,11',
            'name' => 'bail|required|unique:' . $this->table . ',name,' . $this->id . '|max:255',
//            'slug' => 'bail|required|unique:' . $this->table . ',slug,' . $this->id . '|max:255',
            'slug' => 'bail|max:255',
            'sku' => 'bail|max:255',
            'image' => 'bail|max:255',
            'sort_order' => 'bail|required|numeric|digits_between:0,4',
            'status' => 'bail|required|numeric|digits_between:0,1',
            'meta_title' => 'bail|max:255',
            'meta_keyword' => 'bail|max:255',
        ];
    }
}
