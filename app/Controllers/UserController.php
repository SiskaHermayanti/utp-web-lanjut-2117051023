<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    protected $helpers=['form'];
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        
        return view('list_user', $data);
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
        // $kelas = [
        //     [
        //         'id' => 1,
        //         'nama_kelas' => 'A'
        //     ],
        //     [
        //         'id' => 2,
        //         'nama_kelas' => 'B'
        //     ],
        //     [
        //         'id' => 3,
        //         'nama_kelas' => 'C' 
        //     ],
        //     [
        //         'id' => 4,
        //         'nama_kelas' => 'D' 
        //     ],
        // ];

        // $kelasModel = new KelasModel();

        session();

        $kelas = $this->kelasModel->getKelas();

        $data=[
            'title' => 'Create User',
            'kelas'=> $kelas,
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

        $path = 'assets/uploads/img/';

        $foto = $this->request->getFile('foto');

        $name = $foto->getRandomName();

        if ($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }

        $userModel = new UserModel();

        $this->userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
            'foto' => $foto
        ]);
        return redirect()->to('/user');

        // $data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'npm' => $this->request->getVar('npm'),
        //     'kelas' => $this->request->getVar('kelas'),
        // ];
        // return view('profile', $data);
    }

    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];
        return view('profile', $data);
    }
}
