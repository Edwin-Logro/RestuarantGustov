<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Menu extends Model
{
    public function invoices(){
        return $this->belongsToMany(Invoice::class, 'menu_invoices');
    }
}