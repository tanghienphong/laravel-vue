<?php

namespace App\Models;

trait Trackable
{
    public static function bootTrackable()
    {
        static::creating(
            function ($model) {
                $table = $model->getTable();
                $attributes = \Schema::getColumnListing($table);

                if (in_array('created_id', $attributes)) {
                    $model->created_id = auth()->user()->id;
                }
                if (in_array('updated_id', $attributes)) {
                    $model->updated_id = auth()->user()->id;
                }
            }
        );

        static::updating(
            function ($model) {
                $table = $model->getTable();
                $attributes = \Schema::getColumnListing($table);

                if (in_array('updated_id', $attributes)) {
                    $model->updated_id = auth()->user()->id;
                }
            }
        );
    }
}
