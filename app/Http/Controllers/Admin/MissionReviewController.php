<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MissionSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MissionReviewController extends Controller
{
    public function index(): View
    {
        $pendingSubmissions = MissionSubmission::with(['user', 'ecoChallenge'])
            ->where('status', 'pending')
            ->orderBy('submitted_at', 'desc')
            ->paginate(20);

        $approvedSubmissions = MissionSubmission::with(['user', 'ecoChallenge'])
            ->where('status', 'approved')
            ->orderBy('reviewed_at', 'desc')
            ->paginate(20);

        $rejectedSubmissions = MissionSubmission::with(['user', 'ecoChallenge'])
            ->where('status', 'rejected')
            ->orderBy('reviewed_at', 'desc')
            ->paginate(20);

        return view('admin.mission-reviews.index', compact(
            'pendingSubmissions',
            'approvedSubmissions',
            'rejectedSubmissions'
        ));
    }

    public function show(MissionSubmission $submission): View
    {
        $submission->load(['user', 'ecoChallenge']);

        return view('admin.mission-reviews.show', compact('submission'));
    }

    public function approve(Request $request, MissionSubmission $submission): RedirectResponse
    {
        $request->validate([
            'review_notes' => 'nullable|string|max:500',
        ]);

        $submission->approve($request->review_notes);

        return redirect()->back()->with('success', 'Mission submission approved successfully! Points awarded to user.');
    }

    public function reject(Request $request, MissionSubmission $submission): RedirectResponse
    {
        $request->validate([
            'review_notes' => 'required|string|max:500',
        ]);

        $submission->reject($request->review_notes);

        return redirect()->back()->with('success', 'Mission submission rejected. User can resubmit for this challenge.');
    }


}
