<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AutomovilRepository;

class AutomovilController extends Controller
{
    protected $automoviles;
public function __construct(AutomovilRepository $automoviles)
{
$this->automoviles = $automoviles;
}
    
    public function index()
    {
        $automoviles = $this->automoviles->obtenerAutomovil();
return view('automoviles.lista', ['automoviles' => $automoviles]);
    }

   
    public function create()
    {
        return view('automoviles.crear');
    }

    
    public function store(Request $request)
    {
       
        $this->automoviles->InsertarAutomovil($request);
        return redirect()->action([AutomovilController::class, 'index']);
    }

   
    public function show($id)
    {
        $automovil = $this->automoviles->obtenerAutomovilPorId($id);
return view('automoviles.ver', ['automoviles' => $automovil]);
    }

    
    public function edit($id)
    {
        $automovil = $this->automoviles->obtenerAutomovilPorId($id);
return view('automoviles.editar', ['automovil' => $automovil]);
    }

    
    public function update(Request $request, $id)
    {
        $this->automoviles->actualizarAutomovil($request, $id);
return redirect()->action([AutomovilController::class, 'index']);
    }

   
    public function destroy($id)
    {
        $this->automovil->eliminarAutomovil($id);
return redirect()->action([AutomovilController::class, 'index']);
    }
}
