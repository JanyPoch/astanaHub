<?php


namespace App\Http\Controllers;


use App\Http\Requests\PostTagRequest;
use App\Http\Requests\Tag\TagFilter;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Resources\Tag\TagResource;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * @param TagFilter $filters
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(TagFilter $filters)
    {
        $tags = Tag::filter($filters)->paginate(20);

        return TagResource::collection($tags);
    }

    /**
     * @param PostTagRequest $request
     * @return TagResource
     */
    public function store(PostTagRequest $request)
    {
        $tag = Tag::create($request->validated());

        return new TagResource($tag);
    }

    /**
     * @param Tag $tag
     * @param UpdateTagRequest $request
     * @return TagResource
     */
    public function update(Tag $tag, UpdateTagRequest $request)
    {
        $tag->update($request->validated());
        return new TagResource($tag);
    }
}
