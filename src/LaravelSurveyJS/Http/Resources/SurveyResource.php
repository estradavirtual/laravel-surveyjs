<?php

namespace Fruitware\LaravelSurveyJS\LaravelSurveyJS\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class SurveyResource
 *
 * @package Fruitware/LaravelSurveyJS
 */
class SurveyResource extends JsonResource
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
            'id'            =>  $this->id,
            'name'          =>  $this->name,
            'slug'          =>  $this->slug,
            'json'          =>  $this->json,
            'created_at'    =>  $this->created_at->formatLocalized('%A %d %B %Y'),
        ];
    }
}
