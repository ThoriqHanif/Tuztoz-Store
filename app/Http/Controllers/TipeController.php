<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipeRequest;
use App\Http\Requests\UpdateTipeRequest;
use App\Models\Tipe;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $tipes = Tipe::select('tipes.*');
            
            return DataTables::of($tipes)
                ->addColumn('action', function ($tipes) {
                    return view('components.admin.tipe.action', compact('tipes'));
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('components.admin.tipe.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipeRequest $request)
    {
        
        $tipes = new Tipe();
        $tipes->name = $request->name;

        if ($tipes->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipe $tipes, $id)
    {
        $tipes = Tipe::find($id);

        return response()->json(['result' => $tipes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipeRequest $request, Tipe $tipes, $id)
    {
        $tipes = Tipe::find($id);
        $tipes->update([
            'name' => $request->input('name'),
        ]);

        if ($tipes->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipes = Tipe::find($id);

        if ($tipes->delete()) {
            return response()->json(['success' => true, 'message' => 'Tipe berhasil dihapus.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Gagal menghapus Tipe.']);
        }
    }
}
