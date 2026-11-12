<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if (! $request->user()->hasVerifiedEmail() && $request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        $destination = $request->user()->role === 'admin'
            ? route('admin.dashboard', absolute: false)
            : route('home', absolute: false);

        if ($request->user()->role === 'admin') {
            return redirect()->intended($destination.'?verified=1');
        }

        return redirect($destination.'?verified=1');
    }
}
