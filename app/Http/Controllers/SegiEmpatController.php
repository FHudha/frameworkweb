<?php
    
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models\SegiEmpat;
use App\Models\Balok;



class SegiEmpatController extends Controller
    {
    /***********************************
     //method memanggil form input
    *************************************/
    public function inputSegiEmpat()
    {
    return View::make('segi-empat.inputSegiEmpat');
    }

    /************************************
     //method memanggil form input Balok
    ************************************/
    public function inputBalok()
    {
    return View::make('segi-empat.inputBalok');
    }


    /**********************************
     * membaca hasil input
     * diteruskan menampilkan hasilnya
     *********************************/
    public function hasil(Request $request)
    {
    $segiEmpat = new SegiEmpat;
    //aturan validasi
    $rules=[
    'panjang'=>'required|numeric',
    'lebar'=>'required|numeric'];

    $validator = Validator::make( $request->all(), $rules);
    //cek validasi
    if ($validator->fails())
    {
    //jika salah kembalikan ke form untuk diperbaiki
    return View::make('segi-empat.inputSegiEmpat',
    compact('segiEmpat'))->withErrors($validator);
    }else{ //lanjutkan ke menampilkan hasil/
        $segiEmpat->panjang=$request->panjang;
        $segiEmpat->lebar = $request->lebar;
    
        return View::make('segi-empat.hasil',compact('segiEmpat'));
        }
    }

    public function hasilBalok(Request $request)
    {
        $balok = new Balok;
        //aturan validasi
        $rules=[
            'panjang'=>'required|numeric',
            'lebar'=>'required|numeric',
            'tebal'=>'required|numeric' ];

        $validator = Validator::make($request->all(), $rules);
        //cek validasi
        if ($validator->fails())
        {
        //jika salah kembalikan ke form untuk diperbaiki
            return View::make('segi-empat.inputBalok',
            compact('balok'))->withErrors($validator);
        }else{
            //lanjutkan ke menampilkan hasil/
            $balok->panjang=$request->panjang;
            $balok->lebar = $request->lebar;
            $balok->tebal = $request->tebal;

            return View::make('segi-empat.hasilBalok',compact('balok'));
        }
    }

}