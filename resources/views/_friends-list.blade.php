<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse(auth()->user()->follows as $user)
        <li class="mb-4">
            <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                <img class="rounded-full mr-2" src="{{$user->avatar}}" alt=""
                    width="50"
                    height="50"
                >
                {{$user->name}}
            <a/>
        </li>
    @empty 
        <p>No friends yet</p>
    @endforelse
</ul>