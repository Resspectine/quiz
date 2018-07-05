@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url('quiz')}}" method="post" class="form-group">
            @csrf
            <div class="form-control">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-control">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
    </div>
@endsection