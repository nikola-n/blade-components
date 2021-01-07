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

        {{--Simple tabs--}}

        <div x-data="{ active: 'First' }">
            <div>
                <button @click="active = 'First'">First</button>
                <button @click="active = 'Second'">Second</button>
                <button @click="active = 'Third'">Third</button>
            </div>

            <div>
                <div x-show="active === 'First'">First content goes here.</div>
                <div x-show="active === 'Second'">Second content goes here.</div>
                <div x-show="active === 'Third'">Third content goes here.</div>
            </div>
        </div>

        <hr>
        <br>
        {{--Tab component--}}

        <x-tabs active="Second">
            <x-tab name="First">
                First content goes here.
            </x-tab>

            <x-tab name="Second">
                Second content goes here.
            </x-tab>

            <x-tab name="Third">
                Third content goes here.
            </x-tab>
        </x-tabs>

    </x-section>
</x-app-layout>


