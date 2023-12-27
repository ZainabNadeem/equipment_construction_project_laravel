<!Doctype html>
<html>
<header></header>
<body>
@extends('layouts.app') <!-- If you have a layout file -->

@section('content')
    <h1>Contact Us</h1>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <!-- Form fields (name, email, message, etc.) -->
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <!-- Other form fields -->

        <button type="submit">Submit</button>
    </form>
@endsection
</body>
</html>
