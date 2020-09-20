<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img class="rounded-full mr-2" src="{{$tweet->user->avatar}}" alt=""
                width="50"
                height="50"
            >
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        @auth
            <x-like-buttons :tweet="$tweet" />
        @endauth
    </div>
</div>
