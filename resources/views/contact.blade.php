@extends('layouts.app')
@section('title')
Contacts 
@endsection
@section('content')
<h1>Contact page</h1>    
<form action="{{route('form-contact')}}" method="POST">
    @csrf
  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="John Doe" id="name" class="form-control">
  </div>
  
  <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="doe.john@mail.com" id="email" class="form-control">
  </div>
  <div class="form-group">
      <label for="topic">Message topic</label>
      <input type="text" name="topic" placeholder="Message topic" id="topic" class="form-control">             
  </div>
  <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" cols="100" rows="8" placeholder="Message"></textarea>
  </div>
  <button class="btn btn-success" type="submit">Send</button>
</form>
@endsection