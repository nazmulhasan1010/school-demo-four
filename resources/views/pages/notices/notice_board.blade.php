@extends('front')
@section('title','Notice Board')
@section('content')
    <div class="notice">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($notices as $notice)
                        <a href="{{route('notice',$notice->id)}}">
                            <div class="event_date">
                                <div class="event-date-wrap">
                                    <p>{{date('d', strtotime($notice->notice_date))}}</p>
                                    <span>{{date('M', strtotime($notice->notice_date))}} {{date('y', strtotime($notice->notice_date))}}</span>
                                </div>
                            </div>
                            <div class="date-description">
                                <h3>{{$notice->notice_title}}</h3>
                                <p>{{substr($notice->notice_message, 0, 250).'...'}}</p>
                                <hr class="event_line">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
