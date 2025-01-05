<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeagueResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name" => $this->name,
            "primary_role" => $this->primary_role,
            "secondary_role" => $this->secondary_role,
            "base_hp" => $this->base_hp,
            "base_mana" => $this->base_mana,
        ];
    }
}
