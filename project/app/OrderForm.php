<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderForm extends Model
{
    protected $table = 'orderForms';
    protected $guarded = [];
    protected $casts = [];
}
