<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hogar extends CI_Controller {

    public function index(){
        if(!$this->session->userdata('email') || !$this->session->userdata('agente')){
            if($this->input->get('email')){
                $this->session->set_userdata(array(
                    'email'     => $this->input->get('email', true),
                    'agente'    => $this->input->get('agentenom',  true),
                    'tel'       => $this->input->get('agentetel', true),
                    'mail'      => $this->input->get('agentemail', true)
                ));
                redirect('auto');
            }else{
                $this->session->set_userdata(array(
                    'email'     => 'guest@axa.mx'
                ));
            }
        }
        $data[ 'mes' ]      = 'Enero';
        $data[ 'anio' ]     = '2015';
        $data[ 'numero' ]   = '11';

        $this->load->view('header_v');
        $this->load->view('2015/enero/auto_v');
        $this->load->view('footer_v');
    }
}
