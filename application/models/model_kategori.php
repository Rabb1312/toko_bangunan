<<<<<<< HEAD
<?php

class Model_kategori extends CI_Model
{

    public function data_peralatan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Peralatan'));
    }

    public function data_bahan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Bahan'));
    }
}
=======
<?php

class Model_kategori extends CI_Model
{

    public function data_peralatan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Peralatan'));
    }

    public function data_bahan()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'Bahan'));
    }
}
>>>>>>> 54cb7b9dc7ed9db817b24b16b9534107d55f22d4
