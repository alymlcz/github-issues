<?php

namespace App\Http\Controllers;

use App\Services\IssueService;
use App\Http\Controllers\Controller;

class IssueController extends Controller
{
    protected $issueService;

    public function __construct(IssueService $issueService)
    {
        $this->issueService = $issueService;
    }

    // This method will fetch the issues from GitHub and return as JSON response.
    public function getIssues()
    {
        // Get issues from the GitHub API through the service.
        $issues = $this->issueService->getIssuesFromGitHub();
        // Return the issues as a JSON response
        return response()->json($issues);
    }
}
