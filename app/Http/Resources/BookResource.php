<?php

namespace App\Http\Resources;

use App\Http\Resources\TagResource;
use App\Http\Resources\GenreResource;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\SeriesResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'series' => $this->series,
            // 'series' => SeriesResource::make($this->series),
            'name' => $this->name,
            'score' => $this->score,
            'year' => $this->year,
            'part' => $this->part,
            'annotation' => $this->annotation,
            'authors' => AuthorResource::collection($this->authors),
            'tags' => TagResource::collection($this->tags),
            'genres' => GenreResource::collection($this->genres),
            // 'created_at' => $this->created_at->format('d.m.Y'),
            // 'updated_at' => $this->updated_at->format('d.m.Y'),
        ];
    }
}
