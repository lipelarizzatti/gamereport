<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer\Report;
use PDF;

class ReportsController extends Controller
{
    public function index($idgamehouse)
    {
        $object = Report::getAll($idgamehouse);
        
        //$pdf = PDF::loadView('dailyreport.report');
        $pdf = PDF::loadView('dailyreport.report')->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('report.pdf');
    }
}
