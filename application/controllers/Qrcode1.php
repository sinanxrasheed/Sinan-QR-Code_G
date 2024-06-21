<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qrcode1 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('ciqrcode');
    }

    public function index() {
        $this->load->view('qrcode_view');
    }

    public function generate() {
        $params['data'] = $this->input->post('data');

        $params['level'] = 'H';

        $params['size'] = 10;
        
        $params['savename'] = FCPATH . 'uploads/qr_code.png';
        $this->ciqrcode->generate($params);

        echo '<img src="' . base_url() . 'uploads/qr_code.png" />';
    }
}
