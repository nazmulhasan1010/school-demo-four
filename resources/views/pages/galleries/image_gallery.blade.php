@extends('front')
@section('title','Image Gallery')
@section('content')
    <div class="gallery-wrap ">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="gallery-style text-white text-gradient">{{__('front.image')}} {{__('front.gallery')}}</h3>
                </div>
            </div>
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-4">
                        <a href="{{appSetting('asset')->asset.$image->image}}"
                           class="grid image-link">
                            <figure class="effect-bubba gallery-img-wrap">
                                <img style="height: 250px" src="{{appSetting('asset')->asset.$image->image}}"
                                     class="img-fluid" alt="#">
                                <figcaption>
                                    <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
