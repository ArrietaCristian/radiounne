<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Http\Requests\PostStoreRequest;

class PostStoreRequest extends FormRequest
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
        return  [
            
            // 'slug' => 'required|unique:posts,slug',
            'titulo' => 'required',
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'tags' => 'required|array',
            'texto'=> 'required',
            'status'=> 'required|in:1,0',
            'cabeceraimagen' => 'required',
            // 'urlmultimedia' => 'mimes:mp3,mp4',
        ];

        // if($this->get('cabeceraimagen'))
        //     $rules = array_merge($rules, ['cabeceraimagen' => 'mimes:jpg,jpeg,png']);
        
    }
}
