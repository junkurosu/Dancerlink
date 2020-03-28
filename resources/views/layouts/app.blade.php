@php
$category = \App\Category::take(7)->get();
$array = [];
foreach($category as $v){
    $array[] = $v->name;
}
$category_text = implode(',',$array);
@endphp


@if(Request::url() == url('/'))
@section('title'){{config('app.name','Laravel')}}@endsection
@section('description'){{config('app.name')}}ではでは手軽にレンタルダンススタジオを検索することが出来ます。ダンサーにとってスタジオは練習するのに欠かせない存在です。当サイトではGoogleMapを用いて付近のスタジオを検索できる点が他サイトと大きく異なります。今までのサイトでは市区町村別にスタジオを探すことは出来ましたが見づらいものが多く探すのに時間がかかることがありました。そんな実体験からこのサイトは生まれました。ダンサーがスタジオ検索に時間をかけずにストレスなく使うことができるサイトになっています。@endsection
@else
@section('title')@yield('child-title') | {{config('app.name','Laravel')}}@endsection

@section('description')@yield('child-description'){{config('app.name')}}ではでは手軽にレンタルダンススタジオを検索することが出来ます。ダンサーにとってスタジオは練習するのに欠かせない存在です。当サイトではGoogleMapを用いて付近のスタジオを検索できる点が他サイトと大きく異なります。今までのサイトでは市区町村別にスタジオを探すことは出来ましたが見づらいものが多く探すのに時間がかかることがありました。そんな実体験からこのサイトは生まれました。ダンサーがスタジオ検索に時間をかけずにストレスなく使うことができるサイトになっています。@endsection
@endif


@section('og-image')@yield('thumbnail',url('/eye.jpg'))@endsection

@section('meta')

@stop


<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>@yield('title')</title>


    <meta property="og:title" content="@yield('title')">
    <meta name="twitter:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="description" content="@yield('description')">
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('apple-touch-icon.png')}}" sizes="180x180">
    <link rel="icon" href="{{url('favicon.png')}}" sizes="192x192">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="ja" href="{{ url()->current() }}" />
    <link rel="manifest" href="{{url('/manifest.json')}}">
    @yield('meta')

  <script src="{{ asset('js/app.js') }}"></script>


  <!-- Styles -->
  <link href="{{ asset('css/app1.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-menu">MENU</span>
                    </button>

                    <!-- Branding Image -->
                    
                    <a  href="{{ url('/') }}">
                        <img  src="{{ asset('/img/Dancerlink2.png') }}" alt="トップページ" height="50%" width="50%">
                    </a>
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        
                        <li><a href="{{route('studio.pref')}}">住所からスタジオ検索</a></li>
                        <li><a href="{{route('studio.archive')}}">スタジオ一覧</a></li>
                        <li><a href="{{route('studioRegister')}}">スタジオ登録</a></li>
                        
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container" id="breadcrumb">
            @yield('breadcrumb')
        </div>
        
        <div class="container" id="body">

            <div class="row">
                <div class="col-md-8 col-xs-12">
                    @yield('content')
                    @yield('doublerec')
             </div>
             <div class="col-md-4 col-xs-12" id="sidebar">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        キーワードでスタジオを探す
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('search.archive') }}">
                            {{ csrf_field() }}
                            <div id="date-form" class="form-group">
                                <div class="col-md-12">
                                    <input id="text" type="text" class="form-control" name="text" required placeholder="スタジオ名や住所のキーワードで検索">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        検索
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                   <!-- admax -->
<script src="https://adm.shinobi.jp/s/f71bd084159b3ca8322ed6df914d848f"></script>
<!-- admax -->
                </div>

                

              
    </div>
</div>
</div>
<footer>
    <ul>
        <li>
            <a href="/contact">お問い合わせ</a>
        </li>
        <li>
            <a href="{{route('policy')}}">利用規約</a>
        </li>
        <li>
            <a href="{{route('privacy')}}" target="_blank" rel="nofollow">プライバシーポリシー</a>
        </li>
         
    </ul>
    <p class="copy">© 2020 - {{date('Y')}} {{config('app.name')}}</p>
    <br>
</footer>
</div>

<!-- Scripts -->

<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
 @stack('js')
</body>
</html>

@push('js')
<script type="text/javascript" src="{{asset('js/preftest.js')}}"></script>
@endpush
