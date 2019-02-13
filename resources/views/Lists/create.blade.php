@extends('layouts.app')
@section('content')
    <h1>Create list</h1>
    
    <form method="POST" action="/list">
        {{ csrf_field() }}
        <div>

            <input type="text" name="name" placeholder="Lijst">

        </div>

        <div>
            <button type="Submit">Save</button>
        </div>
    </form>
@endsection
