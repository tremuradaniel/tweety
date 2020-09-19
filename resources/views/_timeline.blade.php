<div class="border border-gray-380 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_tweet', ['tweet' => $tweet])    
    @empty
        <p class="p-4">No tweets yet!</p>
    @endforelse
</div>