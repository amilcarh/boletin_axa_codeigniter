<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Opinion extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('functions_m', 'functions');
    }

    public function index(){
        if(!$this->session->userdata('email') || !$this->session->userdata('agente')){
            if($this->input->get('email')){
                $this->session->set_userdata(array(
                    'email'     => $this->input->get('email', true),
                    'agente'    => $this->input->get('agentenom',  true),
                    'tel'       => $this->input->get('agentetel', true),
                    'mail'      => $this->input->get('agentemail', true)
                ));
                redirect('opinion');
            }else{
                $this->session->set_userdata(array(
                    'email'     => 'guest@axa.mx'
                ));
            }
        }

        $email = $this->input->get('email', true);

        if(!$email || !$this->functions->validateMail($email)){
            $this->session->set_flashdata('msg', 'Suscribete al bolet&iacute;n de AXA.');
            redirect('inicio');
        }

        $questions = $this->functions->getQuiz();

        $poll = array();
        foreach($questions as $q){
            $quiz['id']         = $q->id;
            $quiz['question']   = $q->question;
            $answers = $this->functions->getAnswers($q->id);
            $quiz['answers'] = array();
            foreach($answers as $a){
                $ans['id']      = $a->id;
                $ans['answer']  = $a->answer;
                array_push($quiz['answers'],$ans);
            }
            array_push($poll, $quiz);
        }

        $data['poll'] = $poll;
        $data[ 'mes' ]  = 'Septiembre';
        $data[ 'anio' ] = '2014';

        $this->load->view('header_v');
        $this->load->view('opinion_v', $data);
        $this->load->view('footer_v');
    }

    function submit(){
        $question   = $this->input->post('question', true);
        $answer     = $this->input->post('answer', true);
        $email      = $this->input->post('email', true);

        //echo 'email => '.$email.'<br /> answer => '.$answer.'<br /> question => '.$question;

        if($this->functions->submitAnswer($question, $answer, $email)){
            echo 'ingresado';
        }else{
            echo 'error';
        }
    }
}
