<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\PageFormRequest;

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
        $data = $request->only(["name", "email", "subject", "message"]);

        Contact::create($data);

        session()->flash("status", "Contact form was successfully sent!");

        return redirect()->back();
    }

    /**
     * @return View
     */
    public function create()
    {
        return view("pages.create");
    }

    /**
     * @param Page $page
     * @return View
     */
    public function store(PageFormRequest $request)
    {
        $data = $request->only(["title", "slug", "description", "content"]);

        $page = Page::create($data);

        session()->flash("status", "Page was successfully created!");

        return redirect()->route("pages.show", ["page" => $page->slug]);
    }

    /**
     * @param Page $page
     * @return View
     */
    public function edit(Page $page)
    {
        return view("pages.edit", ['page' => $page]);
    }

    /**
     * @param Page $page
     * @return View
     */
    public function update(PageFormRequest $request, Page $page)
    {
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->description = $request->description;
        $page->content = $request->content;
        $page->save();

        session()->flash("status", "Page was successfully edited!");

        return redirect()->route("pages.show", ["page" => $page->slug]);
    }

    public function destroy(Page $page)
    {
        $page->delete();

        session()->flash("status", "The page was successfully deleted!");

        return redirect()->route("dashboard");
    }
}
