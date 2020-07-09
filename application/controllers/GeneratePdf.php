<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeneratePdf extends CI_Controller
{

    function index()
    {
        $this->load->library('pdf');
        $html = $this->load->view('GeneratePdfView', [], true);
        $this->pdf->createPDF($html, 'Receipt of your transaction');
    }
}
