<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function journal(): View
    {
        return view('pages.journal');
    }

    public function careers(): View
    {
        return view('pages.careers');
    }

    public function getStarted(): View
    {
        return view('pages.get-started');
    }

    public function submitGetStarted(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ]);

        // TODO: store in DB (e.g. a Lead model) or notify via Mail/Slack.
        // Lead::create($validated);

        return redirect()
            ->route('get-started')
            ->with('success', 'Thanks! Your request has been received — we\'ll be in touch soon.');
    }
}
