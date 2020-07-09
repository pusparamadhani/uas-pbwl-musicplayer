<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Played extends Model
{
     
    protected $table ='tb_played';
    protected $primaryKey ='play_id';

    protected $fillable = ['artist_id','album_id','track_id'];
}
