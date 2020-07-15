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
				'title' => $this->title,
				'description' =>  $this->description,
				'image' =>  $this->image,
				'price' =>  $this->price,
				'category_id' => $this->category_id,
			];
		//return parent::toArray($request);
    }
}
