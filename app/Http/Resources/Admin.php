<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class Admin extends JsonResource
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
          'role_id' => $this->role_id,
            'username' => $this->username,
            'password' => $this->password,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'gender' => $this->gender,
            'status' => $this->status,
            'token' => '>>'
        ];
    }
}
