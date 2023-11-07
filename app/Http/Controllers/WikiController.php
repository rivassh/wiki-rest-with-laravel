<?php

namespace App\Http\Controllers;

use App\Http\Requests\WikiCreateRequest;
use App\Models\Wiki;

class WikiController
{
    public function create(WikiCreateRequest $request)
    {
        if ($request->validated())
            Wiki::create($request->safe()->only([
                'title',
                'body',
//                'image' //@todo: handle
            ]));
    }
}
