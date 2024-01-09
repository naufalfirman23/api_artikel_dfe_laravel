<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Models\EditorModels;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function showAllEditor(){
        $data = ArtikelModel::all();
        
        return view('index', compact('data'));
    }
    
    public function showDetailArtikel($id){
        try {
            $artikel = ArtikelModel::findOrFail($id);
            $nama_Editor = $artikel->editor->nama;


            $data = [
                'code' => '200',
                'message' => 'Data Berhasil di ambil',
                'data' => [
                    'id' => $artikel->id,
                    'judul' => $artikel->judul,
                    'konten' => $artikel->konten,
                    'created_at' => $artikel->created_at,
                    'updated_at' => $artikel->updated_at,
                    'editor' => $nama_Editor,
                ]
    
            ];
            return response()->json($data);

        } catch(ModelNotFoundException $e) {
            $eror_data = [
                'status' => '404',
                'message' => 'Data tidak ditemukan'
    
            ];
            //kenapa 400 karena kesalahan dari pengambilan data (Modelnya rusak)
            return response()->json($eror_data,404);

        } catch(\Exception $e) {
            $eror_data = [
                'status' => '500',
                'message' => 'Terjadi Kesalahan saat mengambil data'
    
            ];
            //kenapa 400 karena kesalahan dari server
            return response()->json($eror_data,500);
        }


    }

    public function showArtikel(){
        
        $artikel = ArtikelModel::all();
        $data = [
            'code' => '200',
            'message' => 'Data Berhasil di ambil',
            'data' => $artikel

        ];
        return response()->json($data);
    }



}
