<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class PageController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Page $page)
    {
        return view('pages.show', [
            'page' => $page,
        ]);
    }

    public function contact(ContactFormRequest $request)
    {
        dd($request->all());
    }
}
