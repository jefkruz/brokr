<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Property
 *
 * @property $id
 * @property $name
 * @property $banner
 * @property $video1
 * @property $video2
 * @property $video3
 * @property $location
 * @property $title
 * @property $size
 * @property $actual_price
 * @property $promo_price
 * @property $images
 * @property $description
 * @property $features
 * @property $created_at
 * @property $updated_at
 * @property $slug
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Property extends Model
{
    
    static $rules = [
		'name' => 'required',
		'banner' => 'required',
		'description' => 'required',
		'slug' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','banner','video1','video2','video3','location','title','size','actual_price','promo_price','images','description','features','slug'];



}
