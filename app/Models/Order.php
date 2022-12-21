<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;
    protected $fillable = ['customer_id', 'provider_id', 'date', 'hour', 'cost', 'status', 'invoice_id'];

    public function provider() {
        return $this->belongsTo(User::class, 'provider_id');
    }

    public function clinic() {
        return $this->belongsToThrough(Clinic::class, User::class, 'provider_id');
    }
}
