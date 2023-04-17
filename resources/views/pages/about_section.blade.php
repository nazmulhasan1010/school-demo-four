@extends('front')
@section('title','Home')
@push('pageCss')
    <style>
        .blog-featured-img_block iframe{
            width: 100%;
            height: 200px;
        }
    </style>
@endpush
@section('content')
    <section class="blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-img_block">
                        <img src="{{asset(appSetting('asset')->asset.$content->image)}}" class="img-fluid"
                             alt="blog-img">
                    </div>
                    <div class="blog-tiltle_block">
                        <h4>{{$content->title}}</h4>
                        {!! $content->description !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-category_block">
                        <h3>{{__('front.related')}}</h3>
                        <ul>
                            @foreach(appSetting('appData')['abouts'] as $about)
                                <li><a href="{{route('about-section',$about->id)}}">{{$about->title}}<i class="fa fa-caret-right"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="blog-featured_post">
                        <h3>{{__('front.featured')}}</h3>
                        @foreach(App\Models\Video::latest()->take(3)->get() as $video)
                            <div class="blog-featured-img_block">
                                {!! $video->url !!}
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
