<?php

use Livewire\Volt\Component;

new class extends Component {
    
}; ?>

<div>
    <flux:sidebar stashable sticky
        class="border-r md:hidden bg-zinc-100 dark:bg-zinc-800 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="md:hidden" icon="x-mark" />

        <flux:brand wire:navigate href="/" logo="{{ asset('app-logo-black.png') }}" name="{{ config('app.name' )}}" class="px-2 dark:hidden" />
        <flux:brand wire:navigate href="/" logo="{{ asset('app-logo-white.png') }}" name="{{ config('app.name' )}}"
            class="hidden px-2 dark:flex" />

        <flux:navlist variant="outline">
            <flux:navlist.item wire:navigate icon="book-open" href="/about">About</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="light-bulb" href="/services">Services</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="currency-dollar" href="/pricing">Pricing</flux:navlist.item>
            <flux:navlist.item wire:navigate icon="phone" href="/contact">Contact</flux:navlist.item>

            <flux:navlist.group expandable heading="Resources">
                <flux:navlist.item href="/case-studies">Case studies</flux:navlist.item>
                <flux:navlist.item href="/blog">Blog</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
            aria-label="Toggle dark mode" />
    </flux:sidebar>
</div>
