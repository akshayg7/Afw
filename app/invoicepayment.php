<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoicepayment extends Model
{
    protected $table = 'invoice_payment';
    protected $guarded = ['id'];
}
