<?php

namespace App\Http\Controllers;


use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Requests\DosenRequest;
use Illuminate\Validation\Rule;




class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(DosenRequest $request)
    {
       $data = $request->validated();

       $dosen = Dosen::create($data);
       return redirect('/add-dosen')->with('message', 'Dosen Added Successfully');





    }
    public function edit($dosen_id)
    {
        $dosens = Dosen::find($dosen_id);
        return view('dosen.edit', compact('dosens'));
    }

    public function update(DosenRequest $request, $dosen_id)
    {
       $data = $request->validated();

       $dosen = Dosen::where('id', $dosen_id)->update([
        'nid' => $data['nid'],
        'nama_dosen' => $data['nama_dosen'],
        'tempat_lahir' => $data['tempat_lahir'],
        'tanggal_lahir' => $data['tanggal_lahir'],
        'jenis_kelamin' => $data['jenis_kelamin'],
        'alamat_dosen' => $data['alamat_dosen'],
        'email_dosen' => $data['email_dosen'],
        'nomor_telepon' => $data['nomor_telepon'],
       ]);

       return redirect('/dosen')->with('message','Dosen Update Successfuly');
    }

    public function destroy($dosen_id)
    {
        $dosen = Dosen::find($dosen_id)->delete();
        return redirect('/dosen')->with('message','Dosen Delete Successfuly');
    }





}


