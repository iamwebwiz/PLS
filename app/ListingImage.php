<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingImage extends Model
{
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    public function getImageURL()
    {
        return $this->image;
    }
}
