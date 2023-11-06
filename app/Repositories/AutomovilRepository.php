<?php
namespace App\Repositories;
use App\Models\Automovil;
class AutomovilRepository {
    public function obtenerAutomoviles()
{

return Automovil::all();
}


public function obtenerAutomovilPorId($id)
{
return Automovil::find($id);
}


public function insertarAutomovil($automovil)
{
Automovil::create([
'nombre' => $automovil->nombre,
'potencia' => $sutomovil->potencia,
'motor' => $automovil->motor,
]);
}


public function actualizarAutomovil($id, $automovilActualizar)
{
$automovil = Automovil::find($id);
$automovil->nombre = $alumnoActualizar->nombre;
$automovil->potencia = $alumnoActualizar->potencia;
$automovil->save();

}


public function eliminarAutomovil($id)
{
$automovil = Automovil::find($id);
$automovil->delete();
}






}
