<x-dashboard-layout>
    <div class="self-stretch flex-1 lg:max-w-xl lg:mx-auto">
        <flux:heading level="1" size="xl">Good afternoon, {{ Auth::user()->name }}</flux:heading>

        <flux:subheading size="lg" class="mb-6">Here's what's new today.</flux:subheading>

        <flux:separator variant="subtle" />
    </div>
</x-dashboard-layout>
