<?php


namespace App\Http\Controllers;


use App\Http\Requests\Page\PostPageRequest;
use App\Http\Resources\Page\PageResource;
use App\Models\Page;
use App\Models\Tag;

class PageController extends Controller
{
    public function store(PostPageRequest $request)
    {
        $page = Page::create($request->validated());
        $page->components()->createMany($request->components);

        if($request->has('tags'))
            $page->tags()->saveMany(Tag::whereIn('id', $request->tags)->get());

        return new PageResource($page);
    }
}
