<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenu extends Model
{
    use HasFactory;
    protected $table = 'revenu';

    protected $fillable = [
        'type_revenu',
        'montant_revenu',
        'date_revenu',
        'description_revenu',
    ];

}
