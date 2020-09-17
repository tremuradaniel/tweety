@unless ( auth()->user()->is($user) )
    <form method="POST" action="/profiles/{{$user->name}}/follow">
        @csrf
        <button 
            type="submit" 
            class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
        >{{auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}</button>
    </form>
@endif