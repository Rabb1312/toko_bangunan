<<<<<<< HEAD
<?php

class Kategori extends CI_Controller
{
    public function peralatan()
    {
        $data['peralatan'] = $this->model_kategori->data_peralatan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan', $data);
        $this->load->view('templates/footer');
    }

    public function bahan()
    {
        $data['bahan'] = $this->model_kategori->data_bahan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bahan', $data);
        $this->load->view('templates/footer');
    }
}
=======
<?php

class Kategori extends CI_Controller
{
    public function peralatan()
    {
        $data['peralatan'] = $this->model_kategori->data_peralatan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('peralatan', $data);
        $this->load->view('templates/footer');
    }

    public function bahan()
    {
        $data['bahan'] = $this->model_kategori->data_bahan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bahan', $data);
        $this->load->view('templates/footer');
    }
}
>>>>>>> 54cb7b9dc7ed9db817b24b16b9534107d55f22d4
