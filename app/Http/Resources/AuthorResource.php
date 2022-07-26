<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'year' => $this->year,
            'biography' => $this->biography,
            // 'created_at' => $this->created_at->format('d.m.Y'),
            // 'updated_at' => $this->updated_at->format('d.m.Y'),
        ];
    }
}
