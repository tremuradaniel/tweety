<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="">
            <img class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" 
                style="left:50%"
                src="{{$user->avatar}}" alt="profile pic" 
                width="150"
            >
        </div>
       <div class="flex justify-between items-center mb-6">
            <div>
                <h2>
                    {{$user->name}}
                </h2>
                    <p>Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can ('edit', $user)
                    <a href="{{$user->path('edit')}}" 
                        type="submit" 
                        class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
                    >Edit Profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
       </div>
       <p class="text-sm">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae laboriosam quod libero corrupti adipisci maxime provident est nobis quas eos! Culpa iste dicta tempora voluptatem facere illum sapiente blanditiis error.
       </p>
    </header>
    @include('_timeline', [
        'tweets' => $tweets
    ])
</x-app>