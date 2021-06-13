<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barangmasuk;

class BarangmasukController extends Controller
{
    public function index()
    {
    
    return Barangmasuk::all();
    }


/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create(request $request)
{
    //
    $barang = new Barangmasuk;
    $barang->id_vendor = $request->id_vendor;
    $barang->nama_produk = $request->nama_produk;
    $barang->deskripsi = $request->deskripsi;
    $barang->harga = $request->harga;
    $barang->Quantity = $request->Quantity;
    $barang->save();

    return "Data Berhasil Masuk";

}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(request $request, $id)
{
    //
    $id_vendor = $request->id_vendor;
    $nama = $request->nama_produk;
    $deskripsi = $request->deskripsi;
    $harga = $request->harga;
    $Quantity = $request->Quantity;

    $barang = Barangmasuk::find($id);
    $barang->id_vendor = $id_vendor;
    $barang->nama_produk = $nama;
    $barang->deskripsi = $deskripsi;
    $barang->harga = $harga;
    $barang->Quantity = $Quantity;
    $barang->save();

    return "Data Berhasil di Update";
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function delete($id)
{
    //
    $barang = Barangmasuk::find($id);
    $barang->delete();

    return "Data Berhasil di Hapus";
}
}


