<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    protected $helpers=['form'];
    public function index()
    {
        //
    }

    public function profile($nama = "Siska", $kelas = "C", $npm = "2117051023")
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];
        return view('profile', $data);
    }

    public function create(){
        $kelas = [
            [
                'id' => 1,
                'nama_kelas' => 'A'
            ],
            [
                'id' => 2,
                'nama_kelas' => 'B'
            ],
            [
                'id' => 3,
                'nama_kelas' => 'C' 
            ],
            [
                'id' => 4,
                'nama_kelas' => 'D' 
            ],
        ];

        session();

        $data=[
            'kelas'=>$kelas
        ];
        return view('create_user',$data);
    }

    public function store(){
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Nama harus diisi!',
                    'alpha_space' => 'Nama harus diisi huruf dan spasi'
                ]
            ],
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => 'NPM harus diisi!',
                    'is_unique' => 'NPM sudah terdaftar!'
                ]
            ],
        ])) {
            return redirect()->back()->withInput();
        }

        $userModel = new UserModel();

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas'),
        ];
        return view('profile', $data);
    }
}
