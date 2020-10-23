<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - nakataku</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
        <div class="container"><a class="navbar-brand" href="#">nakataku</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-2 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">投稿</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                @endif
                            </div>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">ヒトリゴト</h1>
                <h2 class="masthead-subheading mb-0">No Sake, No Life</h2>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <h2 style="text-align:center">記事一覧</h2>
        </div>
    </section>
    <section>
        <div class="container" style="text-align:center">
            @foreach ($item_list as $item)
            <div class="entry">
                <h5>{{ $item->title }}</h5>
                <div>
                    {!! nl2br(e($item->body)) !!}
                </div>
            </div>
            @endforeach

            @if (count($item_list) < 1)
                <p>投稿がありません</p>
            @endif
        </div>
    </section>
    <footer class="py-2 bg-black">
        <div class="container">
            <p class="text-center text-white m-0 small">Copyright&nbsp;© nakataku 2020</p>
        </div>
    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>