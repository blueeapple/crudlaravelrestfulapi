<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class ClientController extends Controller
{

    public function inputData(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'contact' => 'required',
            'gender'=> 'required',
            'company' => 'required',
            'position' => 'required'
        ]);
//untuk insert ke database bisa menggunakan cara dibawah ini
//        $clients = $client->create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'contact' => $request->contact,
//            'gender'=>$request->gender,
//            'company'=>$request->company,
//            'position'=>$request->position
//        ]);

//Insert database dengan cara kedua, namun harus membuat fillable terlebih dahulu di model Client
        $client = Client::create($request->all());
//lalu kita buat variabel untuk mennyimpan hasil response
       if($client){
            $response=[
                'response' => 'Successfuly invite your data',
                'method' => 'POST',
                'description' => [
                    'link' => 'http://127.0.0.1:8000/api/cheese/input',
                    'data' => $client
                ]
            ];
       }else{
        return response()->json([
            'failed invite your data'
        ], 200);
       }
       return response()->json($response,200);
    }

}
