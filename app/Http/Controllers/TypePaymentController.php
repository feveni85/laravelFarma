<?php

namespace App\Http\Controllers;

use App\Models\TypePayment;
use Illuminate\Http\Request;

class TypePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TypePayment::all();
        return view('intranet.typepayment.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intranet.typepayment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'varTypePayment'=>'required'
        ]);

        TypePayment::create([
            'varTypePayment'=>$request->varTypePayment,
            'bitState'=>(($request->bitState == 'on') ? true : false)
        ]);

        return redirect()->route('typepayment.index')->with('success','Tipo de pago guardado');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypePayment  $typePayment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = TypePayment::findodfail($id);
        return view('intranet.typepayment.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypePayment  $typePayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypePayment $typePayment)
    {
        $request->validate([
            'varTypePayment'=>'required',
            'bitState'=>'required'
        ]);

        $typePayment->update($request->all());

        return redirect()->route('typepayment.index')->with('success','Tipo de pago actualizado.');
    }
}
