@section('title')
    Edit Post
@endsection

@extends('master')

@section('main')
    
    <div class="container">
        <div class="row">
            <h1>Edit Post</h1>
            <div class="col s8 offset-s2">
                <form action="/post/{{$post->id}}/edit" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="name" placeholder="Your Name" id="name" class = "{{$errors->has('name') ? 'red' : '' }}" value="{{ $post->autor}}" >
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="title" placeholder="Your Title" id="title" class = "{{$errors->has('title') ? 'red' : '' }}" value="{{ $post->title}}">
                            <label for="title">For title</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" name="body" placeholder="Your Body" id="body" class = "{{$errors->has('body') ? 'red' : '' }}" value="{{ $post->body}}">
                            <label for="body">For Body</label>
                        </div>
                    </div>
                    <button class="btn pink">Save</button>
                </form>
                @if ($errors->any())
                    <p class="red-text">There was error, try again later</p>
                @endif
            </div>
        </div>
    </div>

@endsection