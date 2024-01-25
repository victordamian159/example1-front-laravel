<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller{
    public function index(){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url.'/clients');
        $data=$response->json();
        return view('clientes', compact('data'));
    }   
    public function store(Request $request){
        $url=env('URL_SERVER_API', 'http://127.0.0.1');
        $response=Http::post($url. '/clients',[
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address
        ]);
        return redirect()->route('clientes.index');
    }
    public function create(){
        return view('cliente');
    }
    public function delete($idCliente){
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response=Http::delete($url. '/clients/'.$idCliente);
        return redirect()->route('clientes.index');
    }

    public function view($idCliente){
        $url=env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::get($url. '/clients/'.$idCliente);
        $data=$response->json();
        $cliente = $data["client"];
        return view('clienteView', compact('cliente'));
    }

    public function update(Request $request){
        $url=env('URL_SERVER_API', 'http://127.0.0.1');
        $response=Http::put($url. '/clients/'.$request->id,[
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address
        ]);
        return redirect()->route('clientes.index');
    }
}
