<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Trackable;

class Category extends Model
{
    use Trackable;

    protected $fillable = [
        'parent_id',
        'title',
        'slug',
        'description',
        'image',
        'status',
        'sort_order',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'created_id',
        'updated_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_category';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'parent_id' => 'bail|required|numeric|digits_between:0,11',
            'image' => 'bail|max:255',
            'sort_order' => 'bail|required|numeric|digits_between:0,4',
            'status' => 'bail|required|numeric|digits_between:0,1',
            'title' => 'bail|required|unique:' . $this->table . ',title,' . $this->id . '|max:255',
            'slug' => 'bail|required|unique:' . $this->table . ',slug,' . $this->id . '|max:255',
            'meta_title' => 'bail|max:255',
            'meta_keyword' => 'bail|max:255',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //            'parent_id' => trans('chotdealproduct::msg_category.lbl_parent_id'),
            //            'image' => trans('chotdealproduct::msg_category.lbl_image'),
            //            'sort_order' => trans('chotdealproduct::msg_category.lbl_sort_order'),
            //            'status' => trans('chotdealproduct::msg_category.lbl_status'),
            //            'title' => trans('chotdealproduct::msg_category.lbl_title'),
            //            'slug' => trans('chotdealproduct::msg_category.lbl_slug'),
            //            'description' => trans('chotdealproduct::msg_category.lbl_description'),
            //            'meta_title' => trans('chotdealproduct::msg_category.lbl_meta_title'),
            //            'meta_keyword' => trans('chotdealproduct::msg_category.lbl_meta_keyword'),
            //            'meta_description' => trans('chotdealproduct::msg_category.lbl_meta_description'),
        ];
    }

    public function message()
    {
        return [
            // 'parent_id.required'=>'Vui lòng nhập Parent Id',
            // 'parent_id.numeric' => 'Parent Id bắt buộc là chữ số',
            // 'parent_id.max' => 'Parent Id nhiều nhất 11 chữ số',

            // 'title.unique'=> ':attribute đã có tiêu đề sử dụng',
            // 'title.max' => 'Tiêu đề nhiều nhất 255 ký tự',
        ];
    }

    public function parent()
    {
        return $this->belongsTo('App\Modules\Product\Models\Category');
    }

    public function products()
    {
        return $this->hasMany('App\Modules\Product\Models\Product');
    }
}
