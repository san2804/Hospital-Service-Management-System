<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mbbs_number',
        'hospital',
        'contact_no',
        'living_city',
        'city'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
