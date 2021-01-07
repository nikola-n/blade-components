<x-app-layout>
    <div class="mx-auto max-w-sm mt-6">
        <h1 class="text-lg font-bold mb-2">Create a post</h1>

        <form method="POST" action="/posts" x-data @submit.prevent="$dispatch('recaptcha')">
            @csrf

            <div class="mb-6">
                <label for="title"
                       class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Title
                </label>

                <input class="border border-gray-400 p-2 w-full" type="text"
                       name="title"
                       id="title"
                       required>
            </div>
            @error('title')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

            <x-recaptcha/>

            <div class="mb-6">
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
{{--                        data-sitekey="{{ config('services.recaptcha.key') }}"--}}
{{--                        data-callback="onSubmit"--}}
                >
                    Submit
                </button>
            </div>

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            @endif

        </form>
    </div>
</x-app-layout>
