<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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

             'name'=>$this->name,
             'description'=>$this->details,
             'price'=>$this->price,
             'stock'=>$this->stock!==0 ? $this->stock: 'outof stock',
             'discount'=>$this->discount,
             'totalPrice'=>round((1 -($this->discount/100))*$this->price),
             'rating'=>$this->reviews->count()>0 ?round($this->reviews->sum('star')/$this->reviews->count()):'',
             'href'=>[
                   'reviews'=>route('reviews.index',$this->id)
             ]

        ];
    }
}
