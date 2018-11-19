<?php
class Home extends CI_Controller {

        private $limit = 50;

        public function index() {
            
            $this->load->database();
            $this->load->library('pagination');

            $data['qtd'] = $this->db->count_all('questions');
            
            $data['questions'] = $this->db->query("select * from questions limit 0,$this->limit")->result();

            $config['base_url'] = site_url("home/all");
            $config['total_rows'] = $data['qtd'];
            $config['per_page'] = $this->limit;

            $this->pagination->initialize($config);
            $data['pagination_links'] = $this->pagination->create_links();

            $this->load->view('topo');
		    $this->load->view('lista', $data);
            $this->load->view('rodape');
            
        }

        public function all($offset=0){
            $this->load->database();
            $this->load->library('pagination');

            $data['qtd'] = $this->db->count_all('questions');
            
            $data['questions'] = $this->db->query("select * from questions limit $offset,$this->limit")->result();

            $config['base_url'] = site_url("home/all");
            $config['total_rows'] = $data['qtd'];
            $config['per_page'] = $this->limit;

            $this->pagination->initialize($config);
            $data['pagination_links'] = $this->pagination->create_links();

            $this->load->view('topo');
		    $this->load->view('lista', $data);
            $this->load->view('rodape');
        }

        public function details($id){            

            $this->load->database();
            
            $data['question'] = $this->db->query("select * from questions where id = $id")->result()[0];
            
            $this->load->view('topo');
		    $this->load->view('detalhes', $data);
            $this->load->view('rodape');

        }
}