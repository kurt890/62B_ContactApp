<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'company_id',
    ];

    /**
     * Get the company that owns the contact.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
