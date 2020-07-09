<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function tracks()
    {
        return $this->hasMany('App\Track', 'track_id_album');
    }

    public function artist()
    {
        return $this->belongsTo('App\Artist', 'album_id_artist');
    }

    //
    protected $table ='tb_album';
    protected $primaryKey ='album_id';

    protected $fillable = ['album_nama', 'album_id_artist'];
}
