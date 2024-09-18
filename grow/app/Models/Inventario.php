<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
 
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
 
    // ...
}

class Inventario extends Model
{
    use HasFactory; protected $fillable = [
        'codigo',
        'categoria',
        'producto',
        'costoUnitario', 
        'cantidadDisponible',
        'descripcion',
        'ubicacion',
        'fechaEntrada',
        'fechaSalida',
        'salidaDestino',
        'estado'
    ];
       
  
    public function scopeNames($inventarios, $q)
    {
        if (trim($q)) {
            $inventarios->where('producto', 'LIKE', "%$q%")
                     ->orWhere('codigo', 'LIKE', "%$q%");
        }
    }


}
