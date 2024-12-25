<?php

class Ortu extends CI_Controller{
    public function index(){
        $data['ortu'] = $this->OrtuModel->get_ortu();

        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('admin/ortu',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'required' => 'Password tidak boleh kosong!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
            'required' => "Password tidak boleh kosong!"
        ]);
        
        if($this->form_validation->run() == false){
            redirect('admin/ortu');
        } else {
        $data = array(
            'nama_ortu' => $this->input->post('nama_ortu'),
            'hubungan' => $this->input->post('hubungan'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'role_id' => $this->input->post('role_id')
        );

        $this->OrtuModel->tambah_data('ortu', $data);
        $this->session->set_flashdata('success_message', 'Data berhasil ditambahkan!');
        redirect('admin/ortu');
        }
    }

    public function edit(){
        $data = array(
            'nama_ortu'=> $this->input->post('nama_ortu'),
            'hubungan' => $this->input->post('hubungan'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat')
        );

        $where = array('id_ortu' => $this->input->post('id_ortu'));

        $this->db->update('ortu', $data, $where);
        $this->session->set_flashdata('success_message', 'Data berhasil diubah!');
        redirect('admin/ortu');
    }

    public function hapus($id){
        $where = array('id_ortu' => $id);
        $this->OrtuModel->hapus_data($where, 'ortu');
        $this->session->set_flashdata('success_message', 'Data berhasil dihapus!');
        redirect('admin/ortu');
    }
}

?>