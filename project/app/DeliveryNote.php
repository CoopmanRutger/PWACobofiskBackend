<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryNote extends Model
{
    protected $table = 'deliveryNotes';

    protected $guarded = [];
    protected $casts = [];
}
