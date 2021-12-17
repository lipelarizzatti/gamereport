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
        /*
        +"pathlogo": "https://i.picsum.photos/id/327/100/100.jpg?hmac=Ecxxw41bWTuqSAGYbarsut_HW1iktY2ksAEsroG6rjU"
        +"eventdate": "20/dez"
        +"urlfirsttable": "https://www.uol.com.br/"
        +"urlsecondtable": "http://www.g1.com.br/"
        +"urlthirdtable": "https://outlook.live.com/owa/"
        +"urlfourthtable": "https://app-vlc.hotmart.com/"
        +"urlbanner": "https://i.picsum.photos/id/551/500/100.jpg?hmac=mFxUOSqb3X4OwHFtbH3y73jM1tsQcrtRsbrFQgSRWAk"
        +"urlgenericinfo": "https://loripsum.net/"
        */
        $object = Report::getAll($idgamehouse);
        // return $pdf->download('report.pdf');
        //$fobject = json_encode($object, JSON_UNESCAPED_SLASHES);
        $obj = [
            'logo' => $object[0]->pathlogo,
            'date' => $object[0]->eventdate,
            'firsttable' => $object[0]->urlfirsttable,
            'secondtable' => $object[0]->urlsecondtable,
            'thirdtable' => $object[0]->urlthirdtable,
            'fourthtable' => $object[0]->urlfourthtable,
            'banner' => $object[0]->urlbanner,
            'geninfo' => $object[0]->urlgenericinfo
        ];
        
        $pdf = PDF::loadView('dailyreport.report', $obj)->setOptions(['defaultFont' => 'sans-serif', 'isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        return $pdf->stream('report.pdf');
        //return view('dailyreport.report', $obj);
        
    }
}
