<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BiodataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        dd($this);
        /**
         * $this pada resource mengembalikan model 
         * $this
         * @return model
         * 
         * */
        return parent::toArray($request);
        // return [
        //     'id' => $this->id,

        // ];
    }
}
