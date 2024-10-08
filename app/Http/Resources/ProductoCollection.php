<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $this->collection->map(function ($producto){
            return [
                'id' => $producto->id,
                'nombre'=>$producto->nombre,
                'descripcion'=>$producto->descripcion,
                'categoria'=>$producto->categoria,
                'precio'=>$producto->precio,
            ];
        })->toArray();
    }
}
