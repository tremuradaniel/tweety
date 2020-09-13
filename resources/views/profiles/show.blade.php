@extends('layouts.app')

@section('content')
    <header  class="mb-6 relative">
       <img src="/images/default-profile-banner.jpg" alt="">
       <div class="flex justify-between items-center mb-6">
            <div>
                <h2>
                    {{$user->name}}
                </h2>
                    <p>Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <button 
                    type="submit" 
                    class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
                >Edit Profile</button>
                <button 
                    type="submit" 
                    class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
                >Follow Me</button>
            </div>
       </div>
       <p class="text-sm">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae laboriosam quod libero corrupti adipisci maxime provident est nobis quas eos! Culpa iste dicta tempora voluptatem facere illum sapiente blanditiis error.
       </p>
       <img class="rounded-full mr-2 absolute" 
        style="width: 150px; left: calc(50% - 75px); top: 17%"
        src="{{auth()->user()->avatar()}}" alt="profile pic" >
    </header>
    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection
