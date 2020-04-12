<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Company-hp</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/company-hp.css') }}">
    </head>

    <body>
        <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="/">Company-hp</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse row" id="nav-bar">
                    <ul class="navbar-nav offset-sm-2 col-sm-7">
                        <li class="nav-item col-sm-3 text-center mt-2 pb-1">{!! link_to_route('company_info', '企業情報', [], ['class' => 'nav-link d-inline']) !!}</li>
                        <li class="nav-item col-sm-3 text-center mt-2 pb-1">{!! link_to_route('products', '製品', [], ['class' => 'nav-link d-inline']) !!}</li>
                        <li class="nav-item col-sm-3 text-center mt-2 pb-1">{!! link_to_route('strength', '自社の強み', [], ['class' => 'nav-link d-inline']) !!}</li>
                        <li class="nav-item col-sm-3 text-center mt-2 pb-1">{!! link_to_route('contacts.create', 'お問い合わせ', [], ['class' => 'nav-link d-inline']) !!}</li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <div class="container">
            @include('layouts.error_messages')
            
            @yield('content')
        </div>
        
        <footer class="fixed-bottom">
            <div class="text-center">
                <div class="bg-dark">{!! link_to_route('privacy_policy', 'プライバシーポリシー', [], ['class' => 'text-white text-decoration-none']) !!}</div>
                <div>©2020 toyomasu akihiro</div>
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>