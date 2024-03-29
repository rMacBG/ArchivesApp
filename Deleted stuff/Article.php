<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'archives';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public static function boot(){
        parent::boot();
        static::deleting(function($obj){
            Storage::delete(Str::replaceFirst('storage/', 'public/', $obj->file));
        });
    }
    public function setImageAttribute($value)
    {
        $attribute_name = "file";
        // destination path relative to the disk above
        $destination_path = "archives";

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::delete(Str::replaceFirst('storage/','public/',$this->{$attribute_name}));

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        $disk = "public";
        // filename is generated -  md5($file->getClientOriginalName().random_int(1, 9999).time()).'.'.$file->getClientOriginalExtension()
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
        $this->attributes[$attribute_name] = 'storage/' . $this->attributes[$attribute_name];
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags','article_id', 'tag_id');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
