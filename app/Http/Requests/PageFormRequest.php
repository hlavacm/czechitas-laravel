<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $currentPage = $this->route("page");
        $currentPageId = $currentPage ? $currentPage->id : null;
        return [
            "title" => "required|max:150",
            "slug" => "required|max:150|unique:pages,slug,{$currentPageId}",
            "description" => "max:255",
            "content" => "required|max:10000",
        ];
    }
}
