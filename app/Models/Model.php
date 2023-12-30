<?php

namespace App\Models;

use App\Filter\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Model extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;
    use HasFilter;
}
