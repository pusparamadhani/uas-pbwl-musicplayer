<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
     public function albums()
    {
        return $this->hasMany('App\Album', 'album_id_artist');
    }
    //
    protected $table ='tb_artist';
    protected $primaryKey ='nama_id';

    protected $fillable = ['nama'];
}
