<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user.index', [
            'data' => $user,
            'breadcrumb' => (object)[
                'title' => 'Daftar User',
                'list' => ['Home', 'User']
            ],
            'page' => (object)[
                'title' => 'Daftar user yang terdaftar dalam sistem'
            ],
            'activeMenu' => 'user'
        ]);
    }

    public function list(Request $request) 
    { 
        $user = UserModel::select('user_id', 'username', 'nama', 'level_id')->with('level'); 

        return DataTables::of($user) 
            ->addIndexColumn()  
            ->addColumn('aksi', function ($user) {  
                $btn = '<a href="'.url('/user/' . $user->user_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/user/' . $user->user_id . '/edit').'" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'.url('/user/'.$user->user_id).'">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                return $btn; 
            }) 
            ->rawColumns(['aksi'])
            ->make(true); 
    } 

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah User',
            'list'  => ['Home', 'User', 'Tambah']
        ];
        $page = (object) [
            'title' => 'Tambah User Baru'
        ];
        $level = LevelModel::all();
        $activeMenu = 'user';

        return view('user.create', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page, 
            'level' => $level, 
            'activeMenu' => $activeMenu
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username',
            'nama'     => 'required|string|max:100',
            'password' => 'required|min:5',
            'level_id' => 'required|integer',
        ]);

        UserModel::create([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user')->with('success', 'Data user berhasil disimpan');
    }

    public function show($id)
    {
        $user = UserModel::with('level')->findOrFail($id);

        return view('user.show', [
            'breadcrumb' => (object)[
                'title' => 'Detail User',
                'list' => ['Home', 'User', 'Detail']
            ],
            'page' => (object)[
                'title' => 'Detail User'
            ],
            'user' => $user,
            'activeMenu' => 'user'
        ]);
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $level = LevelModel::all();

        return view('user.edit', [
            'breadcrumb' => (object)[
                'title' => 'Edit User',
                'list' => ['Home', 'User', 'Edit']
            ],
            'page' => (object)[
                'title' => 'Edit User'
            ],
            'user' => $user,
            'level' => $level,
            'activeMenu' => 'user'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username,' . $id . ',user_id',
            'nama'     => 'required|string|max:100',
            'password' => 'nullable|min:5',
            'level_id' => 'required|integer'
        ]);

        $user = UserModel::findOrFail($id);
        $user->update([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'level_id' => $request->level_id
        ]);

        return redirect('/user')->with('success', 'Data user berhasil diubah');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        try {
            $user->delete();
            return redirect('/user')->with('success', 'Data user berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/user')->with('error', 'Data user gagal dihapus karena terkait dengan tabel lain.');
        }
    }
}
