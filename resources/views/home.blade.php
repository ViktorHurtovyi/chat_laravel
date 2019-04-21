@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" enctype="multipart/form-data">
                {{csrf_field ()}}
                <div class="row">
                    <div class="col col-8">
                        <input type="hidden" name="name" value="{{Auth::user()->name}}">
                        <input name="message" class="form-control input-group-text" type="text" required>
                    </div>
                    <div class="col col-4">
                        <button type="submit" class="btn btn-success">отправить</button>
                    </div>
                </div>
            </form>
            @foreach($message as $m)
                <div class="row">
                <span class="col col-2">{{$m->name}}:</span>
                <span class="col col-10">{{$m->message}}</span>
                    <hr>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
