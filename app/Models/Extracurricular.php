<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Extracurricular extends Model
{
    use HasFactory;

    // public function rAdmin() {
    //     return $this->hasOne(Admin::class, 'extracurricular_id');
    // }

    /**
     * Get the user associated with the Extracurricular
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rAdmin(): HasOne
    {
        return $this->hasOne(Admin::class, 'extracurricular_id', 'id');
    }
}
