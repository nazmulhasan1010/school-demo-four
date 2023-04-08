@php
    $assetServer = appSetting('asset')->asset;
@endphp
<section class="our-teachers " style="background-image:linear-gradient(to bottom,rgba(233,0,100,0.70), rgba(33,0,98,0.70)),url({{asset('assets/image/gradient-g-2.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-5 heading-text">{{__('front.our')}} {{__('front.teacher')}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach($data['staff'] as $teacher)
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="our-teachers-block" style="box-shadow:none">
                        <img src="{{$assetServer.$teacher->staff_photo}}" class="img-fluid teachers-img" alt="#">
                        <div class="teachers-description">
                            <p><strong>{{$teacher->full_name}}</strong>
                                <br> {{$teacher->qualification}}
                            </p>
                            <hr>
                            <p>Syllabus : <span>Economics, Marketing &amp; Finance</span></p>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="{{$teacher->facebook_url}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="{{$teacher->twiteer_url}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="{{$teacher->linkedin_url}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
