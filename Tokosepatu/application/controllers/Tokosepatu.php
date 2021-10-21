<?php
 class tokosepatu extends CI_Controller
 {
    public function index()
    {
        $this->load->view('view-form-tokosepatu');

    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Review_Model');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama',
            'required|min_length[3]',
            [
                'required' => 'Nama Harus Di isi',
                'min_length' => 'Nama terlalu pendek'
            ]
        
        );
        
        $this->form_validation->set_rules(
            'no',
            'no hp',
            'required|min_length[11]',
            [
                'required' => 'No HP Harus diisi',
                'min_length' => 'No HP terlalu pendek'
            ]
        
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-tokosepatu');
        } else {

            $data = [
                'nama' => $this->input->post('nama'),
                'no' => $this->input->post('no'),
                'merk' => $this->input->post('merk'),
                'size' => $this->input->post('size'),
                'harga' => $this->Review_Model->proses('harga')
            ];

            $this->load->view('view-data-tokosepatu' , $data);
        }
    }
}