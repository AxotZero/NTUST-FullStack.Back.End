<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'price' => $this->price,
            'unit' => $this->unit,
            //'date' => $this->updated_at->format('Y/m/d'),
            //'created_at' => $this->created_at->format('Y/m/d H:i:s'),
            //'updated_at' => $this->updated_at->format('Y/m/d H:i:s'),
        ];
    }
}