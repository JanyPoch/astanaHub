<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class MyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                => $this->resource->id,
            'firstname'         => $this->resource->firstname,
            'lastname'          => $this->resource->lastname,
            'phone'             => $this->resource->phone,
            'email'             => $this->resource->email,
            'image'             => $this->resource->image,
            'phone_verified_at' => $this->resource->phone_verified_at,
            'roles'             => $this->resource->roles
        ];
    }
}
