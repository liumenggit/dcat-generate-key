<?php

namespace Liumenggit\GenerateKey\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class AdminSettings extends Model
{
    use HasDateTimeFormatter;

    protected $casts = [
        'value' => 'array',
    ];
    protected $table = 'admin_settings';

}
