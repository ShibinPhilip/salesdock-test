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
            "id" => $this->id,
            "name" => $this->name,
            "upload_speed" => $this->upload_speed,
            "download_speed" => $this->download_speed,
            "technology" => $this->technology,
            "static_ip" => $this->static ? "Yes" : "No"
        ];
    }
}
