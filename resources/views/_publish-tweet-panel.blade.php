<div class="border border-blue-480 rounded-lg px-8 py-6 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea class="w-full" name="body" id="body"
            placeholder="What's up doc?"
        ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img class="rounded-full mr-2" src="{{auth()->user()->avatar()}}" alt="">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">Tweet-a-roo!</button>
        </footer>
        @error('body')
            <p class="text-red-300 text-sm">{{$message}}</p>
        @enderror
    </form>
</div> 