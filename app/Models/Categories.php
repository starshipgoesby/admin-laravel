<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $category_id
 * @property string $name
 */
class Categories extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'category_id';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
