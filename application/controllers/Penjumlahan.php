<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjumlahan extends CI_Controller {

	public function index()
	{
       if ($this->input->post() != null) {
            $nilai = $this->input->post();
            $data['a'] = $nilai['a'];
            $data['b'] = $nilai['b'];
            $data['c'] = $data['a']+$data['b'];
        }else{
            $data['a'] = '';
            $data['b'] = '';
            $data['c'] = '';
        }
        $this->load->view('penjumlahan/penjumlahan',$data);
    }
}

?>
