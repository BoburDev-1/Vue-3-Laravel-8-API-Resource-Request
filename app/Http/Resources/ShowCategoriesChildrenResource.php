<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowCategoriesChildrenResource extends JsonResource
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
            'title' => $this->title,
            'categories_id ' => $this->categories_id,
            // 'CategoriesChildrenApi' => $this->CategoriesChildrenApi,
            
            // 'CategoriesChildrenApi' =>ShowCategoriesChildrenResource::collection($this->CategoriesChildrenApi),

            'CategoriesChildrenApi' => CatChildrenResourse::collection($this->CategoriesChildrenApi),
        ];
    }
}
