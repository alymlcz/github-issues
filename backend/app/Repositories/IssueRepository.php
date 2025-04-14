<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class IssueRepository
{
    public function fetchIssues($token)
    {
        $response = Http::withToken($token)->get('https://api.github.com/issues', [
            'filter' => 'assigned',
            'state' => 'open'
        ]);

        return $response->json();
    }
}
