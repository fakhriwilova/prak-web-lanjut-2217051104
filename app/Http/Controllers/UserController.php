<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

use Illuminate\Http\Request;


class UserController extends Controller
{

    public function show($id){
        $user = $this->userModel->with('kelas')->find($id);
        if($user){
           
                $data = [
                    'title' => 'Profile',
                    'nama' => $user->nama, 
                    'npm' => $user->npm,   
                    'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan', 
                    'user' => $user,
                ];
            } else {
                // Handle the case where the user is not found
                return redirect()->route('users.index')->with('error', 'User not found!');
            

        }
        

        return view('profile', $data);
    }
    protected $userModel;
    protected $kelasModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        // Mengambil semua data user dan menampilkannya dalam view
        $data = [
            'title' => 'Daftar Pengguna',
            'users' => $this->userModel->getUser(), 
        ];


    public function create(){ 
        return view('create_user', ['kelas' => Kelas::all(),]); 
        
        
        } 


        return view('list_user', $data);
    }

    public function create()
    {
        // Mengambil data kelas untuk ditampilkan dalam form
        $kelas = $this->kelasModel->getKelas();
        return view('create_user', ['kelas' => $kelas]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'nama.required' => 'The Nama field is required.',
            'npm.required' => 'The NPM field is required.',
            'kelas_id.required' => 'The Kelas field is required.',
            'kelas_id.exists' => 'The selected Kelas is invalid.',
        ]);

        // Cek apakah ada file yang diunggah
        $fotoPath = null; // Inisialisasi variabel untuk path foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $foto->hashName(); // Mendapatkan nama file yang di-hash
            $fotoPath = $foto->move('upload/img', $foto_name); // Memindahkan foto ke folder upload/img
        }

        // Menyimpan data pengguna
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $fotoPath, // Menyimpan path foto, jika ada
        ]);

        return redirect()->to('/users')->with('success', 'User created successfully!');
    }

    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';
        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    
    public function update(Request $request, $id){
        $user = UserModel::findOrFail($id);
        
        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        if($request->hasFile('foto')){
            $fileName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $fileName);
            $user->foto = 'uploads/' . $fileName;
        }

        $user->save();
        return redirect()->route('users.index')->with('succes', 'User update succesfully');

    }

    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User has been deleted succesfully');
    }
    

    
}

}

    public function create(){
        return view('create_user');
    }

    public function store(Request $request){
        $data = [
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas' => $request->input('kelas'),
        ];
        return view('profile', $data);
    }
}


