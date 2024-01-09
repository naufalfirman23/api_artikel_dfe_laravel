<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditorModels extends Model
{
    use HasFactory;
    protected $table = 'editor';
    protected $guarded = [];
    protected $primaryKey = 'id';


}
