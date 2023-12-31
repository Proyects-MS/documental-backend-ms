<?php

namespace App\Http\Resources;

use App\Http\Resources\ProcessTypeResource;
use App\Models\ProcessType;
use Illuminate\Http\Resources\Json\JsonResource;

class HiringResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'id_processtype' => new ProcessTypeResource(ProcessType::find($this->id_processtype)),
        ];
    }
}
