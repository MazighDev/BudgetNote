<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $table ='budget';
    protected $fillable = ['nom_budget', 'dated_budget', 'datef_budget', 'revenu_budget', 'depense_budget','montant_budget'];
    
    // Define function to automatically calculate and return the 'montant' attribut
    public function getMontantAttribute()
    {
        return $this->revenu_budget - $this->depense_budget;
    }
    // budget only belongs to one user
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
