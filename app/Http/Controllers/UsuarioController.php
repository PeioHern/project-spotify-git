<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    


    public function checkUsuario(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = Usuario::where('email', $email)
                ->where('password', $password)
                ->first();

    if ($user) {
    
    return redirect()->route('listaPodcasts');

    } else {
     
    }
}






}
