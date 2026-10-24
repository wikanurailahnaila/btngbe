<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
            'description' => $this->description, // Asumsikan ini teks/string
            'is_completed' => (bool) $this->is_completed, // Sesuaikan jika nama kolommu berbeda
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}