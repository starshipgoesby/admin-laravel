<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $post_id
 * @property string $title
 * @property string $category
 * @property string $description
 * @property string $filename
 */
class Post extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'post';
    public $timestamps = false;

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'post_id';

    /**
     * @var array
     */
    protected $fillable = ['title', 'category', 'description', 'filename'];
}
