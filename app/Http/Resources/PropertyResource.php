<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
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
            'owner_id' => $this->owner_id,
            'full_name' => $this->full_name,
            'avatar' => $this->avatar,
            'gender' => $this->gender,
            'province' => $this->province,
            'city' => $this->city,
            'discrict' => $this->discrict,
            'is_subscription' => $this->is_subscription,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
