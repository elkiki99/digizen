<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Flux;

new #[Layout('layouts.guest')] class extends Component {
    /**
     * Send an email verification notification to the user.
     */
    public function sendVerification(): void
    {
        if (Auth::user()->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);

            return;
        }

        Auth::user()->sendEmailVerificationNotification();

        Flux::toast(
            heading: 'Verification link sent.',
            text: 'We have emailed you a verification link. Please check your email.',
            variant: 'success',
        );
    }

    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<flux:card class="space-y-6">
    <div>
        <flux:heading size="lg">Thanks for signing up!</flux:heading>
        <flux:subheading>Before getting started, could you verify your email address by clicking on the link we just
            emailed to you? If you didn't receive the email, we will gladly send you another.</flux:subheading>
    </div>

    <div class="flex items-center justify-between">
        <flux:button variant="primary" wire:click="sendVerification">
            {{ __('Resend verification email') }}
        </flux:button>

        <flux:button variant="ghost" wire:click="logout" type="submit">
            {{ __('Log out') }}
        </flux:button>
    </div>
</flux:card>
