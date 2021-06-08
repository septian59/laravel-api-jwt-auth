<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'title' => $this->title,
            'published' => $this->created_at->format("d F Y"),
            'body' => $this->body,
            'subject' => $this->subject->name,
            'user' => $this->user->name,
        ];
    }

    public function with($request)
    {
        return ['status' => 'success'];
    }
}
