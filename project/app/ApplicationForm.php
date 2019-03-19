<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    protected $table = 'applicationForms';

    protected $guarded = [];
    protected $casts = [];
}
