<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Octubre extends CI_Controller {
    public $_data   = array(
                        'mes'       => 'Octubre',
                        'anio'      => '2014',
                        'numero'    => '10'
                        );

	public function index ()
    {
        $this->_initPage();

        $this->parser->parse( 'header_v', $this->_data );
		$this->parser->parse( '2014/octubre/inicio_v', $this->_data );
        $this->load->view( 'footer_v', $data);
	}

    public function salud ()
    {
        $this->_initPage();

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/salud_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function futuro ()
    {
        $this->_initPage();

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/futuro_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function auto ( )
    {
        $this->_initPage();

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/auto_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function hogar ()
    {
        $this->_initPage();

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/hogar_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function apps ()
    {
        $this->_initPage();

        $this->parser->parse( 'header_v', $this->_data );
        $this->parser->parse( '2014/octubre/apps_v', $this->_data );
        $this->load->view( 'footer_v' );
    }

    public function _processClientData ()
    {
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
    }

    public function _initPage ()
    {
        $this->_processClientData ();

        $this->load->library('parser');
    }
}
