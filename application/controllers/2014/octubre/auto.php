<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auto extends CI_Controller {

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
        $data[ 'mes' ]      = 'Octubre';
        $data[ 'anio' ]     = '2014';
        $data[ 'numero' ]   = '10';

        $this->load->view( 'header_v', $data );
        $this->load->view( '2014/octubre/auto_v', $data );
        $this->load->view( 'footer_v' );
    }
}
