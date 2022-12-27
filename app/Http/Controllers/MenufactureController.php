<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenufactureRequest;
use App\Models\Menufacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menufacture_list = Menufacture::paginate();

        return view('backend.menufacture.menufacture_list',['menufacture_list'=>$menufacture_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menufacture.menufacture_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenufactureRequest $request, Menufacture $menufacture)
    {
        $menufacture->fill($request->except('_token'))->save();

        $value = 'Menufacture Added Successfully';

        Session::flash('added-sucess',$value);

        return redirect()->route('menufacture.index');
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
    public function edit($id)
    {
        $single_menufacture = Menufacture::findOrFail($id);

        return view('backend.menufacture.menufacture_edit',['single_menufacture'=>$single_menufacture]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenufactureRequest $request, Menufacture $menufacture)
    {
        $menufacture->fill($request->all())->save();

        $value = 'Menufacture Updated Successfully';

        Session::flash('added-sucess',$value);

        return redirect()->route('menufacture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $single_menufacture = Menufacture::findOrFail($id);

        $single_menufacture->delete();

        $value = 'Menufacture Deleted Successfully';

        Session::flash('alert-danger',$value);
        return redirect()->route('menufacture.index');
    }
}
