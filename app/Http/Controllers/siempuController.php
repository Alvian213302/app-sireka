<?php

namespace App\Http\Controllers;

use App\Models\cin_model;
use App\Models\empu_model;
use App\Models\kritiksaran_model;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class siempuController extends Controller
{
    private $primaryKey = 'id';

    public function index()
    {
        $data = cin_model::orderBy('id', 'DESC')->take(5)->get();
        return view('welcome', compact('data'), ["tittle" => "beranda"]);
    }

    public function dashboard()
    {
        $empu = empu_model::all()->count();
        return view('dashboard', ["tittle" => "dashboard"], compact('empu'));
    }

    public function login()
    {
        return view('login', ["tittle" => "login"]);
    }

    public function profil()
    {
        return view('profil', ["tittle" => "profil"]);
    }

    public function regulasi()
    {
        return view('regulasi', ["tittle" => "regulasi"]);
    }

    public function dg()
    {
        return view('dg', ["tittle" => "dg"]);
    }

    public function form()
    {
        return view('form', ["tittle" => "form"]);
    }

    public function cin()
    {
        $tampilcin = \App\Models\cin_model::all();
        return view('cin', ["tittle" => "cin", 'cin' => $tampilcin]);
    }

    public function empu()
    {
        $tampilempu = \App\Models\empu_model::all();
        return view('empu', ["tittle" => "empu", 'empu' => $tampilempu]);
    }

    public function user()
    {
        $tampiladmin = \App\Models\User::where('role', 'admin')->get();
        $tampiluser = \App\Models\User::where('role', 'user')->get();
        return view('user', ["tittle" => "user"], compact('tampiladmin', 'tampiluser'));
    }

    public function kritiksaran()
    {
        $tampilkritiksaran = \App\Models\kritiksaran_model::all();
        return view('kritiksaran', ["tittle" => "kritiksaran", 'welcome' => $tampilkritiksaran]);
    }

    //User-Ekspedisi
    public function addEkspedisi(Request $request)
    {

        $adduser = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:20',
            'nomor_telepon' => 'required|min:7|max:12',
            'role' => 'required',
        ]);

        $adduser['password'] = bcrypt($adduser['password']);
        User::create($adduser);
        return redirect('/user');
    }

    //Kritik & Saran
    public function addKritiksaran(Request $request)
    {
        kritiksaran_model::create([
            'nama_lengkap' => $request->nama_lengkap,
            'kritiksaran' => $request->kritiksaran
        ]);
        return redirect('/');
    }

    public function updatekritiksaran(Request $request)
    {
        $message = [
            'required' => 'Kolom :attribute Harus Diisi !'
        ];

        $this->validate($request, [
            'nama_lengkap' => 'required',
            'kritiksaran' => 'required'
        ], $message);

        kritiksaran_model::where('id', $request->id)
            ->update([
                'nama_lengkap' => $request->nama_lengkap,
                'kritiksaran' => $request->kritiksaran
            ]);

        return redirect('/kritiksaran');
    }

    public function deleteKritiksaran($id)
    {
        kritiksaran_model::where('id', $id)
            ->delete();

        return redirect('/kritiksaran');
    }

    //CIN
    public function addCin(Request $request)
    {

        $this->validate(
            $request,
            ['gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']
        );

        cin_model::create([
            'maskapai' => $request->maskapai,
            'no_surat' => $request->no_surat,
            'notice' => $request->notice,
            'gambar' => $request->file('gambar')->getClientOriginalName()
        ]);
        $request->file('gambar')->storeAs('public/gambar', $request->file('gambar')->getClientOriginalName());
        return redirect('/cin');
    }

    public function updateCin(Request $request)
    {

        $message = [
            'required' => 'Kolom :attribute Harus Diisi !'
        ];

        $this->validate($request, [
            'maskapai' => 'required',
            'no_surat' => 'required',
            'notice' => 'required',
        ], $message);

        if ($request->gambar == '') {
            cin_model::where('id', $request->id)
                ->update([
                    'maskapai' => $request->maskapai,
                    'no_surat' => $request->no_surat,
                    'notice' => $request->notice,
                ]);
        } else {
            cin_model::where('id', $request->id)
                ->update([
                    'maskapai' => $request->maskapai,
                    'no_surat' => $request->no_surat,
                    'notice' => $request->notice,
                    'gambar' => $request->file('gambar')->getClientOriginalName()
                ]);
            $request->file('gambar')->storeAs('public/gambar', $request->file('gambar')->getClientOriginalName());
        }
        return redirect('/cin');
    }

    public function detailCin(Request $request)
    {
        cin_model::where('id', $request->id)
            ->update([
                'maskapai' => $request->maskapai,
                'no_surat' => $request->no_surat,
                'notice' => $request->notice,
                'gambar' => $request->file('gambar')->getClientOriginalName()
            ]);
    }

    public function deleteCin($id)
    {
        cin_model::where('id', $id)
            ->delete();

        return redirect('/cin');
    }

    //EMPU

    public function addempu(Request $request)
    {

        empu_model::create([
            'pj' => $request->pj,
            'ekspedisi' => auth()->user()->name,
            'tanggal' => auth()->user()->created_at,
            'komoditi' => $request->komoditi,
            'koli' => $request->koli
        ]);
        return redirect('/empu');
    }

    public function addempuadmin(Request $request)
    {

        empu_model::create([
            'pj' => $request->pj,
            'ekspedisi' => $request->ekspedisi,
            'tanggal' => auth()->user()->created_at,
            'komoditi' => $request->komoditi,
            'koli' => $request->koli
        ]);
        return redirect('/empu');
    }

    public function updateEMPU(Request $request)
    {

        empu_model::where('id', $request->id)
            ->update([
                'ekspedisi' => $request->ekspedisi,
                'pj' => $request->pj,
                'tanggal' => auth()->user()->updated_at,
                'komoditi' => $request->komoditi,
                'koli' => $request->koli
            ]);

        return redirect('/empu');
    }

    public function deleteEmpu($id)
    {
        empu_model::where('id', $id)
            ->delete();

        return redirect('/empu');
    }

    //Admin-User
    public function updateAdmin(Request $request)
    {
        $message = [
            'required' => 'Kolom :attribute Harus Diisi !'
        ];

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'nomor_telepon' => 'required',
        ], $message);

        if ($request->password == '') {
            User::where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'nomor_telepon' => $request->nomor_telepon
                ]);
        } else {
            User::where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'nomor_telepon' => $request->nomor_telepon,
                    'password' => bcrypt($request->password)
                ]);
        }
        return redirect('/user');
    }

    public function deleteAdmin($id)
    {
        User::where('id', $id)
            ->delete();

        return redirect('/user');
    }

    //Login
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard');
            } else {
                return redirect('/form');
            }
        } else {
            return redirect()->back()->with('pesan', 'Email atau Password Salah');
        }
    }

    //Logout
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
