@extends('front')
@section('title','Video Gallery')
@push('pageCss')
    <style>
        iframe {
            width: 100%;
        }
    </style>
@endpush
@section('content')
    <div class="gallery-wrap ">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="gallery-style text-white text-gradient">{{__('front.video')}} {{__('front.gallery')}}</h3>
                </div>
            </div>
            <div class="row">
                @foreach($videos as $video)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-img-top">{!! $video->url !!}</div>
                            <div class="card-body">
                                <p class="card-text p-2">{{$video->title}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
