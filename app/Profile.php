<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
    protected $guarded = [];

    public function profileImage() {
        $imagePath = ( $this->image )? $this->image:'profile/kNnP5pMvMKIJIPyucc8FB0csbBiey0Y6neDbRQeo.png';
        return '/storage/'.$imagePath;

    }

    public function user() {
        return $this->belongsTo( User::class );
    }

    public function followers() {
        return $this->belongsToMany( User::class );
    }
}
