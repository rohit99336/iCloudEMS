<?php

namespace App\Imports;

use App\Models\Studentdata;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentDataImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Log::info($row);

        return new Studentdata([
            'date'     => $row['date'],
            'academic_year'    => $row['academic_year'],
            'session'    => $row['session'],
            'alloted_category'    => $row['alloted_category'],
            'voucher_type'    => $row['voucher_type'],
            'voucher_no'    => $row['voucher_no'],
            'roll_no'    => $row['roll_no'],
            'admnouniqueid'    => $row['admnouniqueid'],
            'status'    => $row['status'],
            'fee_category'    => $row['fee_category'],
            'faculty'    => $row['faculty'],
            'program'    => $row['program'],
            'department'    => $row['department'],
            'batch'    => $row['batch'],
            'receipt_no'    => $row['receipt_no'],
            'fee_head'    => $row['fee_head'],
            'due_amount'    => $row['due_amount'],
            'paid_amount'    => $row['paid_amount'],
            'concession_amount'    => $row['concession_amount'],
            'scholarship_amount'    => $row['scholarship_amount'],
            'reverse_concession_amount'    => $row['reverse_concession_amount'],
            'write_off_amount'    => $row['write_off_amount'],
            'adjusted_amount'    => $row['adjusted_amount'],
            'refund_amount'    => $row['refund_amount'],
            'fund_trancfer_amount'    => $row['fund_trancfer_amount'],
            'remarks'    => $row['remarks'],

        ]);
    }
}
