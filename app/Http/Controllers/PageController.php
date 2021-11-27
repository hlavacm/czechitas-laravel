<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Contact;
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
        $data = $request->only(["name", "email", "subject", "message"]);

        Contact::create($data);

        session()->flash("status", "Contact form was successfully sent!");

        return redirect()->back();
    }
}
