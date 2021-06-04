@extends('layouts.app')
@section('title')
Home Page
@endsection
@section('content')
<h1>Home Page</h1> 
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nostrum odit laborum nihil molestias corporis, doloribus, nisi alias debitis dicta repellat, quam tempora saepe voluptas maiores unde consequatur tenetur necessitatibus!
</p>   
@endsection

@section('sidePanel')
   @parent
   <p>Additional text</p> 
@endsection