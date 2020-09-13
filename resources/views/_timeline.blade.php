<div class="border border-gray-380 rounded-lg">
    @foreach ($tweets as $tweet)
        @include('_tweet', ['tweet' => $tweet])                    
    @endforeach
</div>