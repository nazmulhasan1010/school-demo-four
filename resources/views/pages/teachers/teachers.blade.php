@extends('front')
@section('title','Teachers')
@push('pageCss')
    <style>
        .our-teachers-block {
            position: relative;
        }

        .teacher-info-button {
            position: absolute;
            width: 100%;
            height: 0;
            z-index: 999;
            top: 0;
            left: 0;
            background-color: rgba(51, 51, 51, 0.80);
            display: none;
            justify-content: center;
            align-items: center;
            animation: height .2s;
            animation-fill-mode: forwards;
        }

        @keyframes height {
            100% {
                height: 100%;
            }
        }

        .teacher-info-button .btn-default {
            margin: 0;
            opacity: 0;
            animation: visibility .2s;
            animation-fill-mode: forwards;
        }

        @keyframes visibility {
            100% {
                opacity: 1;
            }
        }

        .our-teachers-block:hover .teacher-info-button {
            display: flex;
        }
    </style>
@endpush
@section('content')
    <section class="our-teachers ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-5 heading-text">{{__('front.our')}} {{__('front.teacher')}}</h2>
                </div>
            </div>
            <div class="row">
                @foreach($teachers as $key=>$teacher)
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="our-teachers-block" style="box-shadow:none">
                            <div class="teacher-info-button">
                                <a href="{{route('teacher-information', $teacher->id)}}"
                                   class="btn btn-default btn-about">{{__('front.see')}} {{__('front.more')}} {{__('front.details')}}</a>
                            </div>
                            <img src="{{appSetting('asset')->asset.$teacher->staff_photo}}"
                                 class="img-fluid teachers-img" alt="#">
                            <div class="teachers-description">
                                <p><strong>{{$teacher->full_name}}</strong>
                                    <br> {{$teacher->qualification}}
                                </p>
                                <hr>
                                <p>Department : <span>{{$teacher->department[0]->name}}</span></p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="{{$teacher->facebook_url}}">
                                                <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$teacher->twiteer_url}}">
                                                <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="{{$teacher->linkedin_url}}">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
