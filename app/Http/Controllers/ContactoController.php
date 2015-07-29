<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contacto;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return view('contacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $inputs = Request::all();

        $reglas = array(
            'nombre'      => 'required',
            'correo'      => 'email',
            'comentarios' => 'required|max:300',
        );

        $mensajes = array(
            'required' => trans('error.requerido'),
            'email' => trans('error.correo'),
        );

        $validar  = Validator::make($inputs, $reglas, $mensajes);


        if($validar->fails()){
            //return back('#gracias')->withErrors($validar)->withInput();
            return Redirect::to(\LaravelLocalization::getCurrentLocale() .'/'. trans('menu.contacto').'#about')->withErrors($validar)->withInput();
        }
        else{

            $contacto = new Contacto;
            $contacto->email = Request::get('correo');
            $contacto->save();

            $contactName = Request::get('nombre');
            $contactEmail = Request::get('correo');
            $contactMessage = Request::get('comentarios');;
            $contactAddres =  Request::get('direccion');

            $data = array('name'=>$contactName, 'email'=>$contactEmail, 'description'=>$contactMessage, 'addres' => $contactAddres);
            Mail::send('layouts.email', $data, function($message) use ($contactEmail, $contactName)
            {
                $message->from($contactEmail, $contactName);
                $message->to('contacto@fundacionvivemejor.org', 'Contacto Fundacion Vive Mejor')->subject('Solicitud vía WEB');
                $message->cc($contactEmail, $contactName);
            });

            return Redirect::to(\LaravelLocalization::getCurrentLocale() .'/'.trans('menu.contacto') .'?gracias#gracias');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
