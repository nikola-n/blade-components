<x-app-layout>
    <x-modal
        title="Deactivate Account?"
        submit-label="Deactivate"
    >
        <x-slot name="trigger">
            <button @click="show = true">Show Modal</button>
        </x-slot>
        Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
    </x-modal>

    <x-modal
        title="Subscribe"
    >
        <x-slot name="trigger">
            <button @click="show = true">Click me</button>
        </x-slot>
        lorem ipsum.
    </x-modal>

    <x-section>
        <div>
            <x-dropdown>
                <x-slot name="trigger">
                    <button>Click Me</button>
                </x-slot>
                <x-dropdown-link href="/">One</x-dropdown-link>
                <x-dropdown-link href="/">Two</x-dropdown-link>
                <x-dropdown-link href="/">Three</x-dropdown-link>
            </x-dropdown>
        </div>
    </x-section>
</x-app-layout>
