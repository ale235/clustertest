{{--<nav class="navbar navbar-default navbar-fixed-top navbar-custom" role="navigation">--}}
    {{--<div class="container" style="border: 0px solid red">--}}
       {{----}}
    {{--<!-- Brand and toggle get grouped for better mobile display -->--}}
    {{--<div class="navbar-header">--}}
        {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">--}}
            {{--<span class="sr-only">Toggle navigation</span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
        {{--</button>--}}
        {{--<!--<a class="navbar-brand" href="#" >Start Bootstrap</a>-->--}}
        {{--<a class="navbar-brand" href="{{ url('/')}}" style="">--}}
            {{--<div class="logo"></div>--}}
            {{--<!--<img src="/images/logox.jpg" alt="" style="height: 44px; margin-top: -8px; border: 0px solid red;">-->--}}
        {{--</a>--}}
    {{--</div>--}}

    {{--<!-- Collect the nav links, forms, and other content for toggling -->--}}
    {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li><a href="{{ url('/')}}">Blog</a></li>--}}
            {{--<li><a href="{{ url('/about')}}">Sobre Nosotros</a></li>--}}
            {{--<li><a href="{{ url('/alejandrocolautti')}}">test</a></li>--}}
            {{--<li><a href="{{ url('/contact')}}">Hablame</a></li>--}}
            {{--@if (@Auth::user()->users_role_id == 1)--}}
            {{--<li><a href="{{ url('/admin')}}">Administración</a></li>--}}
            {{--@endif--}}
        {{--</ul>--}}
        {{--<div class="col-sm-4 col-md-4" style="border: 1px solid red--">--}}
            {{--<form class="navbar-form" role="search">--}}
                {{--<div class="input-group col-md-12" style="border: 1px solid black-">--}}
                    {{--<input type="text" class="form-control" placeholder="Buscar" name="search" id="search">--}}
                    {{--<span class="input-group-btn">--}}
                        {{--<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>--}}
                    {{--</span>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav navbar-right"> --}}
            {{--@if (Auth::guest())--}}
                {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                {{--<li><a href="{{ url('/login') }}">Autenticarse</a></li>--}}
            {{--@else--}}
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{ url('/profile') }}">Profile</a></li>--}}
                        {{--<li><a href="{{ url('/change_password') }}">Change password</a></li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li><a href="{{ url('/logout') }}">Sign out</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endif--}}
        {{--</ul>--}}
        {{----}}
    {{--</div><!-- /.navbar-collapse -->--}}
   {{----}}
    {{--</div>--}}
{{--</nav>--}}
<header id="header">
    <nav class="navbar st-navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="index.html"><img src="images/logoPoner.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="st-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#our-works">Works</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#our-team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>