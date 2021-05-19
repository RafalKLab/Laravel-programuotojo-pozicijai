<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pardavimas extends Model
{
    use HasFactory;
    protected $table = 'pardavimai';
    protected $fillable = ['darbuotojo_id', 'sutarties_nr', 'rekomendacija', 'greitis', 'pastabos', 'sutikimas'];
}
