<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Competition;
use App\Data;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function member()
    {
        return view('member');
    }
    public function index()
    {
        $countAll = DB::table('users')->where('id_level','1')->count();
        $countAk3 = DB::table('users')->where('Prodi','D III Akuntansi')->where('id_level','1')->count();
        $countPj3 = DB::table('users')->where('Prodi','D III Pajak')->where('id_level','1')->count();
        $countPbb3 = DB::table('users')->where('Prodi','D III PBB / Penilai')->where('id_level','1')->count();
        $countBc3 = DB::table('users')->where('Prodi','D III Bea Cukai')->where('id_level','1')->count();
        $countKbn3 = DB::table('users')->where('Prodi','D III Kebendaharaan Negara')->where('id_level','1')->count();
        $countMa3 = DB::table('users')->where('Prodi','D III Manajemen Aset')->where('id_level','1')->count();
        $countPj1 = DB::table('users')->where('Prodi','D I Pajak')->where('id_level','1')->count();
        $countBc1 = DB::table('users')->where('Prodi','D I Bea Cukai')->where('id_level','1')->count();
        $countKbn1 = DB::table('users')->where('Prodi','D I Kebendaharaan Negara')->where('id_level','1')->count();
        return view('home', ['countAll' => $countAll,
                            'countAk3' => $countAk3,
                            'countPj3' => $countPj3,
                            'countBc3' => $countBc3,
                            'countPbb3' => $countPbb3,
                            'countKbn3' => $countKbn3,
                            'countMa3' => $countMa3,
                            'countPj1' => $countPj1,
                            'countBc1' => $countBc1,
                            'countKbn1' => $countKbn1]
                    );
    }
    public function form()
    {
        return view('form');
    }
    public function Akuntansitiga()
    {
        $users = DB::table('users')->whereIn('Prodi',['D III Akuntansi'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D III Akuntansi']);
    }
    public function Pajaktiga()
    {
        $users = DB::table('users')->whereIn('Prodi',['D III Pajak'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D III Pajak']);
    }
    public function Pbbtiga()
    {
        $users = DB::table('users')->whereIn('Prodi',['D III PBB / Penilai'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D III PBB / Penilai']);
    }
    public function Beacukaitiga()
    {
        $users = DB::table('users')->whereIn('Prodi',['D III Bea Cukai'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D III Bea Cukai']);
    }
    public function Kbntiga()
    {
        $users = DB::table('users')->whereIn('Prodi',['D III Kebendaharaan Negara'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D III Kebendaharaan Negara']);
    }
    public function Mansettiga()
    {
        $users = DB::table('users')->whereIn('Prodi',['D III Manajemen Aset'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D III Manajemen Aset']);
    }
    public function Pajaksatu()
    {
        $users = DB::table('users')->whereIn('Prodi',['D I Pajak'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D I Pajak']);
    }
    public function Beacukaisatu()
    {
        $users = DB::table('users')->whereIn('Prodi',['D I Bea Cukai'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D I Bea Cukai']);
    }
    public function Kbnsatu()
    {
        $users = DB::table('users')->whereIn('Prodi',['D I Kebendaharaan Negara'])->where('id_level','1')->get();
        return view('datas', ['users' => $users, 'prodi' => 'D I Kebendaharaan Negara']);
    }
    public function landing()
    {
        return view('welcome');
    }
}
