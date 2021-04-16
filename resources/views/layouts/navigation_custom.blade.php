@auth
<div class="min-h-screen bg-gray-100">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="mb-3">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
            {{-- Authentication --}}
            <div class="mb-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="button" onclick="event.preventDefault();
                    this.closest('form').submit();">{{ __('Log out') }}</button>
                </form>
            </div>
        </div>
    </header>
</div>
@endauth
@guest
    {{-- not login --}}
    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
@endguest