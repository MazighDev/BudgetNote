<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $table ='depense';
    protected $fillable =[
     'type_depense',
     'montant_depense',
     'date_depense',
     'description_depense'
    ];
    // Depense only belongs to one user
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
