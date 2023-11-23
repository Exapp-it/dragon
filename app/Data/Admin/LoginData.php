<?php

namespace App\Data\Admin;

use Spatie\LaravelData\Data;

class LoginData extends Data
{
    public function __construct(
        public string $username,
        public string $password,
    )
    {

    }

//    public static function rules(): array
//    {
//        return [
//            'title' => ['required', 'string'],
//            'artist' => ['required', 'string'],
//        ];
//    }
}
