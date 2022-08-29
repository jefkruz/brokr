<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Act
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Act extends Model
{

    static $rules = [
		'title' => 'required',
		'description' => 'required',
    ];


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $guarded;



}
