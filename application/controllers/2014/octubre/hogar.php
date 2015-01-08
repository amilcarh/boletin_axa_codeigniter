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
                redirect('hogar');
            }else{
                $this->session->set_userdata(array(
                    'email'     => 'guest@axa.mx'
                ));
            }
        }
        $this->load->library('parser');
        $data   = array(
                        'mes'       => 'Octubre',
                        'anio'      => '2014',
                        'numero'    => '10'
                        );

        $this->parser->parse( 'header_v', $data );
        $this->parser->parse( '2014/octubre/hogar_v', $data );
        $this->load->view( 'footer_v' );
    }
}
