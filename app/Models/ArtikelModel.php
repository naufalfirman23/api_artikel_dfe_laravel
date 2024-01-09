<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    

    public function editor(){
        return $this->belongsTo(EditorModels::class, 'id_editor');
    }
}
