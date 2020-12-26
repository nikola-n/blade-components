<x-form method="{{ $method }}" action="{{ $action }}">
    <div>
        <button class="{{ $attributes->get('class') }}" type="submit">
            {{ $slot }}
        </button>
    </div>
</x-form>
