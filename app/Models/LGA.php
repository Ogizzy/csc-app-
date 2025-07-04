<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LGA extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'lgas';

    protected $fillable = [
        'lga', 'state_id'
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function employees()
{
    return $this->hasMany(Employee::class);
}

}
