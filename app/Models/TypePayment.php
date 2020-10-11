<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePayment extends Model
{
    use HasFactory;

    protected $table = 'type_payments';
    protected $primaryKey = 'idTypePaymnet';
    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = ['varTypePayment','bitState'];
}
