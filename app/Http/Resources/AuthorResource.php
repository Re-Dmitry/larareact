<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
		//dd($this);
		return [
			'name' => $this->name,
			'age' => $this->age,
			'experience' => $this->experience,
			'blogs' => $this->blogs,
		];
		  //dd($request);
        //return parent::toArray($request);
    }
}
