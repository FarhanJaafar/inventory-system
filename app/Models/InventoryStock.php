<?php

namespace App\Models;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id',
        'color',
        'quantity',
    ];

    public function inventory()
    {
        return $this->hasOne(Inventory::class);
    }
}
