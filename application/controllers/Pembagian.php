<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembagian extends CI_Controller
{

    public function index()
    {
        if($this->input->post() != null){
            $nilai = $this->input->post();
            $data ['a'] = $nilai['nilaia'];
            $data ['b'] = $nilai['nilaib'];
            $data ['c'] = $data['a']/$data['b'];
        } else {
            $data['a'] = "";
            $data['b'] = "";
            $data['c'] = "";
        }
        $this->load->view('pembagian/pembagian', $data);
    }
}
