<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
   public function toArray(Request $request): array
{
    return [
        'id' => $this->id,
        'title' => $this->title,
        'description' => $this->description,
        'price' => $this->price,
        'delivery_time' => $this->delivery_time,
        'used_tools' => $this->used_tools,
        'user' => new UserResource($this->whenLoaded('user')),
        'category' => new CategoryResource($this->whenLoaded('category')),
        'created_at' => $this->created_at,
    ];
}
}
