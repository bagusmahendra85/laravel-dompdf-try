<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Report extends Controller
{
    public function index()
    {
        return view('report');
    }

    public function downloadPDF()
    {
        $pdf = Pdf::loadView('report-download');
        return $pdf->download('report.pdf');
    }
}
