<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class IssueService
{
    public function getIssuesFromGitHub()
    {
        // Get the GitHub token from .env
        $token = env('GITHUB_API_TOKEN');

        // Make the GitHub API request with the token
        $response = Http::withToken($token)->get('https://api.github.com/issues', [
            'filter' => 'assigned',
            'state' => 'open'
        ]);

        return $response->json();
    }
}
