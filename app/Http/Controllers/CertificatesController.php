<?php

namespace App\Http\Controllers;

use Spipu\Html2Pdf\Html2Pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\GetCertificated;
use Illuminate\Routing\Controller;

class CertificatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = GetCertificated::get();

        return view('certificates', ['certificates' => $certificates]);
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
    public function store(Request $request)
    {
        $certificates = new GetCertificated();
        $status = $certificates
            ->where('id', $request->id)
            ->update([
                'status' => $request->status
            ]);

        return $status;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $validatedData = $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'middlename' => 'required',
        ]);

        $fio = $validatedData['surname'] . ' ' . $validatedData['name'] . ' ' . $validatedData['middlename']; 
        $this->getPDF($fio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getPDF($fio){
        
        $pdf = new PDF('P', 'A4', 'ru', true, 'UTF-8');
        $pdf->setDefaultFont('timesnewroman');
        $content = file_get_contents(asset('docs/report.html'));
        $content = str_replace('[fio]', $fio, $content);
        $pdf->writeHTML($content);
        $pdf->output('Справка об обучении.pdf');
    }
}
