<?php

namespace App\Http\Resources\V2;

use App\Http\Resources\V2\PostResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    
    
    public $collects =  PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,

            'meta' => [
                'organization' => 'SrCat',
                'authors' => [
                    'Thrinity',
                    'Thomas'
                ]
                ],
                'type' => 'articles'
        ];
    }
}
