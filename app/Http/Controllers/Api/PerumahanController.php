<?php

namespace App\Http\Controllers\Api;

use App\Perumahan;
use Illuminate\Http\Request;
use App\Http\Utils\ResponseApiJson;
use App\Http\Controllers\Controller;

class PerumahanController extends Controller
{
    use ResponseApiJson;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Perumahan::all();
        $tipe  = $result[0]->tipe_rumah();

        $temp = [];
        foreach($result as $rumah) {
            $response_result = [
                'rumah' => $rumah,
                "tipe_rumah" => $rumah->tipe_rumah()->nama,
                'sertifikat' => $rumah->sertifikat()->sertifikat,
            ];
            /* push data */
            array_push($temp, $response_result);
        }

        return $this->responseSuccessJson($temp, "menampilkan seluruh data perumahan");
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Perumahan  $perumahan
     * @return \Illuminate\Http\Response
     */
    public function show(Perumahan $perumahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Perumahan  $perumahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perumahan $perumahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Perumahan  $perumahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perumahan $perumahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Perumahan  $perumahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perumahan $perumahan)
    {
        //
    }
}
