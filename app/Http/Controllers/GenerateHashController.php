<?php

namespace App\Http\Controllers;

class GenerateHashController extends Controller
{
    public function generateHash(string $text): string
    {
        return hash('sha256', $text);
    }
}
