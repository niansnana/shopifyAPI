<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Goods extends JsonResource
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
            'name' => $this->name,
            'price' => $this->price,
            'num' => $this->num,
            'cat_id' => $this->cat_id,
            'introduce' => $this->introduce,
            'logo' => $this->logo,
            'is_del' => $this->is_del,
            'cat_one_id' => $this->cat_one_id,
            'cat_two_id' => $this->cat_two_id,
            'cat_three_id' => $this->cat_three_id,
            'hot_num' => $this->hot_num,
            'is_promote' => $this->is_promote,
            'status' => $this->status,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at
        ];
    }
}
