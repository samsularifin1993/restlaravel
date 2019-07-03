<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
	
	public static function rules($update = false, $id = null)
    {
        $rules = [
            'name'    => 'required',
        ];
		
        if ($update) {
            return $rules;
        }
		
        return array_merge($rules, [
            'name'         => 'required',
        ]);
    }
}
