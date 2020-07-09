<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
     public function playeds()
    {
        return $this->hasMany('App\Played', 'play_id_track');
    }

    public function album()
    {
        return $this->belongsTo('App\Album', 'track_id_album');
    }
    //
    protected $table ='tb_track';
    protected $primaryKey ='track_id';

    protected $fillable = ['track_name', 'track_id_album', 'track_time', 'track_file'];
}
