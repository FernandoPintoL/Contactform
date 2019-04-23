<?php
namespace Fpl\Administrador\Http\Controllers;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Fpl\Administrador\Models\User;
class AdministradorController extends Controller
{
    public function index()
    {
        return view('administrador::administrador');
    }

    public function send(Request $request){
        User::create($request->all());
        return view('administrador::administrador');
    }
    public function getAdm(){
		$user = User::all();
		return response()->json($user);
    }
}