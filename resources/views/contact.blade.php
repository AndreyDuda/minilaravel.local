@extends('layouts.layout')

@section('content')
    <div class="col-md-9">

    <pre>


		</pre>
        {{--{{ dump(Session::all()) }}--}}
    <div class="">
        <h2>Contact us!</h2>
    </div>

    <p>
        This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
    </p>

        @if(count($errors)>0)
            <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
              </ul>
            </div>
        @endif


    <form method="post" action="{{ route('contact') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Jane Doe">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" value="{{ old('site') }}" name="site" placeholder="Site">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection