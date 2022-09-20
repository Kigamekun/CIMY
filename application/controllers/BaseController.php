<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BaseController extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */


    public function __construct()
    {
        parent::__construct();
        $this->load->model("pegawai_model");
        $this->load->model("petugas_model");
        $this->load->model("login_model");
        $this->load->model("jurusan_model");
        $this->load->model("kelas_model");
        $this->load->model("siswa_model");
        $this->load->model("spp_model");
        $this->load->model("pembayaran_model");
        $this->load->library('session');
    }




    public function dd($param)
    {
        var_dump($param);
        die;
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function login()
    {
        if ($this->input->method() == 'post') {
            $user = $this->login_model->where(['username'=>$this->input->post('username'),'password'=>md5($this->input->post('password'))]);
            if (!is_null($user)) {
                $this->session->set_userdata('auth', true);
                $this->session->set_userdata('user', $user);
                return redirect('/dashboard');
            } else {
                return redirect('/login');
            }
        } else {
            if (is_null($this->session->userdata('auth'))) {
                $this->load->view('auth/login');
            } else {
                $this->load->view('dashboard');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('auth');
        return redirect('/login');
    }

    public function dashboard()
    {
        if (is_null($this->session->userdata('auth'))) {
            $this->load->view('auth/login');
        } else {
            if ($this->session->userdata('user')->level == 1) {
                $this->load->view('page/index');
            } else {
                $user = $this->pegawai_model->getAll();
                $petugas = $this->petugas_model->getAll();
                $jurusan = $this->jurusan_model->getAll();
                $kelas = $this->kelas_model->getAll();
                $siswa = $this->siswa_model->getAll();
                $spp = $this->spp_model->getAll();
                $this->load->view('page/dashboard', ['user'=>$user,'jurusan'=>$jurusan,'kelas'=>$kelas,'siswa'=>$siswa,'petugas'=>$petugas,'spp'=>$spp]);
            }
        }
    }


    public function kelas($id)
    {
        $data = $this->kelas_model->where(['jurusan_id'=>$id]);
        $this->load->view('page/kelas', ['data'=>$data,'jurusan_id'=>$id]);
    }

    public function pembayaran($id)
    {
        $data = $this->pembayaran_model->where(['spp_id'=>$id]);
        $this->load->view('page/pembayaran', ['data'=>$data,'spp_id'=>$id]);
    }


    public function registerPegawai()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('thumb')) {
            $this->login_model->registerPegawaiWithoutImage();
            $this->session->set_flashdata('message', 'data berhasil dibuat !');
            $this->session->set_flashdata('status', 'success');
            return redirect('/dashboard');
        } else {
            $this->login_model->registerPegawai();
            $this->session->set_flashdata('message', 'data berhasil dibuat !');
            $this->session->set_flashdata('status', 'success');
            return redirect('/dashboard');
        }
    }


    public function registerSiswa()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('thumb')) {
			$this->login_model->registerSiswaWithoutImage();
            $this->session->set_flashdata('message', 'data berhasil dibuat !');
            $this->session->set_flashdata('status', 'success');
            return redirect('/dashboard');
        } else {
            $this->login_model->registerSiswa();
            $this->session->set_flashdata('message', 'data berhasil dibuat !');
            $this->session->set_flashdata('status', 'success');
            return redirect('/dashboard');
        }
    }


    // Siswa
    public function create()
    {
        $this->pegawai_model->save();
        $this->session->set_flashdata('message', 'data berhasil dibuat !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }

    public function delete($id)
    {
        $this->pegawai_model->delete($id);
        $this->session->set_flashdata('message', 'data berhasil didelete !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }


    public function update($id)
    {
        $this->pegawai_model->update($id);
        $this->session->set_flashdata('message', 'data berhasil di update !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }



    // Jurusan
    public function createJurusan()
    {
        $this->jurusan_model->save();
        $this->session->set_flashdata('message', 'data berhasil dibuat !');
        $this->session->set_flashdata('statu	s', 'success');
        return redirect('/dashboard');
    }

    public function deleteJurusan($id)
    {
        $this->jurusan_model->delete($id);
        $this->session->set_flashdata('message', 'data berhasil didelete !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }


    public function updateJurusan($id)
    {
        $this->jurusan_model->update($id);
        $this->session->set_flashdata('message', 'data berhasil di update !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }



    // Kelas
    public function createKelas()
    {
        $this->kelas_model->save();
        $this->session->set_flashdata('message', 'data berhasil dibuat !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/kelas'.'/'.$this->input->post('jurusan_id'));
    }

    public function deleteKelas($id, $jurusan)
    {
        $this->kelas_model->delete($id);
        $this->session->set_flashdata('message', 'data berhasil didelete !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/kelas'.'/'.$jurusan);
    }


    public function updateKelas($id, $jurusan)
    {
        $this->kelas_model->update($id);
        $this->session->set_flashdata('message', 'data berhasil di update !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/kelas'.'/'.$jurusan);
    }


    // Petugas
    public function createPetugas()
    {
        $this->petugas_model->save();
        $this->session->set_flashdata('message', 'data berhasil dibuat !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }

    public function deletePetugas($id)
    {
        $this->petugas_model->delete($id);
        $this->session->set_flashdata('message', 'data berhasil didelete !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }


    public function updatePetugas($id)
    {
        $this->petugas_model->update($id);
        $this->session->set_flashdata('message', 'data berhasil di update !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }

    // Siswa
    public function createSiswa()
    {
        $this->siswa_model->save();
        $this->session->set_flashdata('message', 'data berhasil dibuat !');
        $this->session->set_flashdata('statu	s', 'success');
        return redirect('/dashboard');
    }

    public function deleteSiswa($id)
    {
        $this->siswa_model->delete($id);
        $this->session->set_flashdata('message', 'data berhasil didelete !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }


    public function updateSiswa($id)
    {
        $this->siswa_model->update($id);
        $this->session->set_flashdata('message', 'data berhasil di update !');
        $this->session->set_flashdata('status', 'success');
        return redirect($_SERVER['HTTP_REFERER']);
    }



    // SPP
    public function createSpp()
    {
        $this->spp_model->save();
        $this->session->set_flashdata('message', 'data berhasil dibuat !');
        $this->session->set_flashdata('statu	s', 'success');
        return redirect('/dashboard');
    }

    public function deleteSpp($id)
    {
        $this->spp_model->delete($id);
        $this->session->set_flashdata('message', 'data berhasil didelete !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }


    public function updateSpp($id)
    {
        $this->spp_model->update($id);
        $this->session->set_flashdata('message', 'data berhasil di update !');
        $this->session->set_flashdata('status', 'success');
        return redirect('/dashboard');
    }
}
