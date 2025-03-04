<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        // karena menggunakan resource, maka kita bisa mengakses relasi dengan mudah
        // dan menggunakan "data" pada saat parsing untuk menampilkan data student
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            // 'class' => ClassesResource::make($this->class),
            'class' => ClassesResource::make($this->whenLoaded('class')),
            // 'section' => SectionResource::make($this->section),
            'section' => SectionResource::make($this->whenLoaded('section')),
            'created_at' => $this->created_at->toFormattedDateString(),
        ];
    }
}
