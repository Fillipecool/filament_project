<?php

namespace App\Http\Responses;

use Filament\Http\Responses\Auth\Contracts\LoginResponse as FilamentLoginResponse;

class CustomLoginResponse implements FilamentLoginResponse
{
    public function toResponse($request)
    {
        return redirect('/contract');
    }
}
