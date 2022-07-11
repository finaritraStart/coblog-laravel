@extends('layouts.app')

@section('content')

<style>
    .btn-b {
        outline: 0;
        margin-right: 5px;
        padding: 0.6em 24px 0.6em 24px;
        font-size: 14px;
        font-family: Google Sans;
        color: #fff;
        border: none;
        border-radius: 3px;
        font-weight: 300;
        cursor: pointer;
        background-color: rgb(26, 115, 232);
        transition: box-shadow 0.3sS;
        outline-style: none;
    }
</style>


@if (session()->has('message'))

<p>
    {{ session()->get('message') }}
</p>

@endif

@if (Auth::check())
<br>
<a href="/blog/create" class="btn-b">
    Create post
</a>

@endif







<section class="about" id="about">
    @foreach ($posts as $post)
    <div class="container">
        <div class="about-content">
            <div>
                <img src="{{ asset('images/' . $post->image_path) }}" alt="">
            </div>
            <div class="about-text">
                <div class="title">
                    <h2> {{ $post->title }}</h2>
                    <p>by {{ $post->user->name }} , Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                </div>
                <p>{{ $post->description }}</p>
                <a href="/blog/{{ $post->slug }}" class="btn-b">
                    lire
                </a>


                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <span class="float-right">
                    <a href="/blog/{{ $post->slug }}/edit" style="background-color:#00c851" class="btn-b">
                        modifier
                    </a>
                </span>

                <span class="float-right">
                    <form action="/blog/{{ $post->slug }}" method="POST">
                        @csrf
                        @method('delete')


                    </form>
                </span>
                @endif




            </div>
        </div>
    </div>
</section>














@endforeach

@endsection