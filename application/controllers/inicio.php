<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InicioEnero2015 extends CI_Controller {

    public function index(){
        if(!$this->session->userdata('email') || !$this->session->userdata('agente')){
            if($this->input->get('email')){
                $this->session->set_userdata(array(
                    'email'     => $this->input->get('email', true),
                    'agente'    => $this->input->get('agentenom',  true),
                    'tel'       => $this->input->get('agentetel', true),
                    'mail'      => $this->input->get('agentemail', true)
                ));
                redirect('inicio');
            }else{
                $this->session->set_userdata(array(
                    'email'     => 'guest@axa.mx'
                ));
            }
        }
        $data[ 'mes' ]  = 'Septiembre';
        $data[ 'anio' ] = '2014';

        $this->load->view('header_v');
        $this->load->view('2015/enero/inicio_v');
        $this->load->view('footer_v');
    }
}
