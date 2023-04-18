@extends('front')
@section('title','Notice Board')
@section('content')
    <div class="notice">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="date-description m-0">
                        <h3>{{$notice->notice_title}}</h3>
                        <p>{{$notice->notice_message}}</p>
                        <hr class="event_line">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
