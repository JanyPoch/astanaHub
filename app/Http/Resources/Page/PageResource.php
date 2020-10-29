<?php

namespace App\Http\Resources\Page;

use App\Http\Resources\Components\ContentComponentResource;
use App\Http\Resources\Tag\TagResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $page = $this->resource;
        return [
            'category'    => $page->category,
            'user'        => $page->user,
            'locale'      => $page->locale,
            'startup_id'  => $page->startup_id,
            'title'       => $page->title,
            'domain'      => $page->domain,
            'alias'       => $page->alias,
            'active'      => $page->active,
            'commentable' => $page->commentable,
            'publish_at'  => $page->publish_at,
            'components'  => ContentComponentResource::collection($page->components),
            'tags'        => TagResource::collection($page->tags)
        ];
    }
}
