<?php

use Dompdf\Dompdf;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/download-demo-pdf', function (Dompdf $dompdf, ViewFactory $view) {
    $html = $view->make('pdf', [], [])->render();
    $dompdf->loadHtml($html, null);
    $dompdf->render();
    $this->rendered = true;
    $pdfContent = $dompdf->output();

    return response()->streamDownload(
        fn () => print($pdfContent),
        'dompdf-issue-3530.pdf'
    );
});
