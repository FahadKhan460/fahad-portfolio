<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

final class DocumentController extends Controller
{
    public function download(Request $request): \Symfony\Component\HttpFoundation\StreamedResponse
    {
        $filePath = 'fahad-resume.pdf';

        if (! Storage::disk('public')->exists($filePath)) {
            abort(404, 'File not found');
        }

        $mimeType = Storage::disk('public')->mimeType($filePath);

        return Storage::disk('public')->download(
            $filePath,
            'fahad-resume.pdf',
            [
                'Content-Type' => $mimeType,
                'Cache-Control' => 'no-cache, must-revalidate',
            ]
        );
    }
}
