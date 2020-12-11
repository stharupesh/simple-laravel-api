<?php

namespace App\Http\Resources\Car;

use App\Http\Resources\Make\Make as MakeResource;
use App\Http\Resources\Model\Model as ModelResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'year' => $this->year,
            'quantity' => $this->quantity,
            'make' => new MakeResource($this->make),
            'model' => new ModelResource($this->model)
        ];
    }
}
