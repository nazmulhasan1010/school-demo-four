<header>
    <div class="container header-container">
        <div class="header-section d-flex">
            <div class="school-logo">
                <img src="{{$assetServer.$appData['app']->logo}}" alt="School Logo"/>
            </div>
            <div class="school-name">
                <h2>{{strtoupper($appData['school']->school_name)}}</h2>
                <h4 class="text-center">{{$appData['school']->address}}</h4>
                <h6>EINN: {{$appData['school']->school_code}}</h6>
            </div>
            <div class="attachment">
                <img src="{{asset('assets/image/men.jpg')}}" alt="School Logo"/>
            </div>
        </div>
    </div>
    <div class="container nav-menu ">
        <div class="row navigation ">
            <div class="col-md-6 res-logo ">
                <a href="{{route('/')}}">
                    <img src="{{$assetServer.$appData['app']->logo}}" class="responsive-logo img-fluid"
                         alt="responsive-logo"/>
                </a>
            </div>
            <div class="col navigation-modal ">
                <nav class="navbar navbar-toggleable-md ">
                    <button class="navbar-toggler" style="margin-right: 10px" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown">
                        <i style="color: #fff" class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('/')}}">{{__('front.home')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">{{__('front.about')}}</a>
                                <ul class="dropdown-menu">
                                    @foreach($appData['abouts'] as $about)
                                        <li>
                                            <a class="dropdown-item"
                                               href="{{route('about-section',$about->id)}}">{{$about->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admission-form.html">{{__('front.admissions')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="academics.html">{{__('front.academics')}}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">{{__('front.administration')}}</a>
                                <ul class="dropdown-menu">
                                    @foreach($appData['testimonial'] as $testimonial)
                                        <li>
                                            <a class="dropdown-item" href="{{route('testimonial',$testimonial->id)}}">Message of {{$testimonial->designation}}</a>
                                        </li>
                                    @endforeach
                                        <li>
                                            <a class="dropdown-item" href="{{route('teacher')}}">{{__('front.teacher')}}</a>
                                        </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('notice-board')}}">{{__('front.notice')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">{{__('front.contact')}}</a>
                            </li>
                            <li class="nav-item">
                                @if (!auth()->check())
                                    <a class="nav-link" href="{{$assetServer.'login'}}">{{__('front.login')}}</a>
                                @else
                                    <a class="nav-link"
                                       href="{{$assetServer.'admin-dashboard'}}">{{__('front.dashboard')}}</a>
                                @endif
                            </li>
                        </ul>
                        <div class="language-box">
                            <div class="language-button-box">
                                <a href="{{route('language-change','bn')}}"
                                   class="language-button {{Session::get('language')==='bn'?'active':''}}">Bangla</a>
                                <a href="{{route('language-change','en')}}"
                                   class="language-button {{Session::get('language')==='en'?'active':''}}">English</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
