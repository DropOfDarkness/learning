@extends('layout')

@section('demoContent')

        <h2>Previous Message:</h2>
        <p id="messageArea">
            {{ $message }}
        </p><br />

        <form action="/submission" id="frum">
            <label for="messageBox">Enter Your Message:</label><br>

            <textarea id="messageBox" name="messageEntry" rows="7" cols="50" form="frum"></textarea><br />

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>

            <input type="submit" value="Submit">
        </form>

@endsection