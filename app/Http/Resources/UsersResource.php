<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'id'=>(string)$this->id,
            'type'=> 'Users',
            'attributes'=> [
        'Name'=>$this->name,
        'e-mail'=>$this->email,
        'created'->$this->created_at,
        'updated'=>$this->updated_at
          ]
        ];
    }
}
