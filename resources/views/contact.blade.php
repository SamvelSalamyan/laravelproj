@extends('layouts.app')

@section('title-block')Contact
@endsection

@section('content')
<h1>Contact</h1>



<form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="name">Enter your name</label>
        <input class="form-control" type="text" name="name" placeholder="Enter your name" id="name">
    </div>
    <div class="form-group">
        <label for="email">Enter your email</label>
        <input class="form-control" type="text" name="email" placeholder="Enter your email" id="email">

    </div>
    <div class="form-group">
        <label for="subject">Write your title</label>
        <input class="form-control" type="text" name="subject" placeholder="Write your title" id="subject">

    </div>
    <div class="form-group">
        <label for="message">Enter your text</label>
        <textarea name="message" id="message" class="form-control" placeholder="Enter your text"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Send</button>

</form>

@endsection


