@extends('front')
@section('title','Administration')
@section('content')
    <div class="speech">
        <div class="container">
            <h2>The message of our <span class="text-gradient-no-font">{{$content->designation}}</span></h2>
            <div class="row">
                <div class="col-md-8">
                    <p><i class="fa-solid fa-quote-left" style="font-size:25px; margin-right:15px"></i>{{$content->description}}<i class="fa-solid fa-quote-right" style="font-size:25px; margin-left:15px"></i></p>
                </div>
                <div class="col-md-4">
                    <img style="height: 300px; width: 100%" src="{{asset(appSetting('asset')->asset.$content->image)}}" class="img-fluid" alt="#">
                    <p class="text-center">
                        <strong>{{$content->name}}</strong><br>
                        <span>{{$content->designation.', '.appSetting('appData')['info']->school_name}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
