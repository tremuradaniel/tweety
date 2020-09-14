<x-master>
    <section class="px-8">
        <main class="container mx-auto mb-4">
            <div class="md:flex bg:justify-between">
                @if(auth()->check())
                    <div class="md:w-32">
                        @include('_sidebar-links')
                    </div>
                @endif
                <div class="md:flex-1 md:mx-10" style="max-width:700px">
                    {{$slot}}
                </div>
                @if(auth()->check())
                    <div class="md:w-1/6 bg-blue-100 rounded-lg pl-4">
                        @include('_friends-list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>
