<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentdata extends Model
{

    //use HasFactory;
    public $table = 'studentdata';

    protected $fillable = [
        'date',
        'academic_year',
        'session',
        'alloted_category',
        'voucher_type',
        'voucher_no',
        'roll_no',
        'admnouniqueid',
        'status',
        'fee_category',
        'faculty',
        'program',
        'department',
        'batch',
        'receipt_no',
        'fee_head',
        'due_amount',
        'paid_amount',
        'concession_amount',
        'scholarship_amount',
        'reverse_concession_amount',
        'write_off_amount',
        'adjusted_amount',
        'refund_amount',
        'fund_trancfer_amount',
        'remarks',
    ];

}
