<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class validation extends Model
{
    protected $table = 'validation_document';

    protected $filltable = [
      'val_defoinve', 'val_di', 'val_dgip',
    ];
}
