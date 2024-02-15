<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacsv extends Model
{
    use HasFactory;

    protected $fillable = ['code','name','level_one','level_two','level_three','price','priceSP','quantity','properties','joint_sale','unit','picture','home','description'];


}
