<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        
        
        <meta name="csrf-token" content='{{ csrf_token() }}'>
        
        <title>@yield('title')</title>
        
        <script src="{{ secure_asset('is/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
    
    </head>
    <body>
        <div id="app">
            <nav class="navber navber-expand-md navber-dark navber-laraver">
                <div class="container">
                    <a class="navber-brand" href="{{ url('/') }}">
                        {{ config('app.name','laraver') }}"
                    </a>
                    <bottom class="navber-toggler" type="bottom" date-toggler="collapse" date-target="#navberSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navber-toggler-icon"></span>
                    </bottom>
                    
                    <div class="collapse navber-collapse" id="navberSupportedContent">
                        <ul class="navber-nav mr-auto">
                            
                            
                        </ul>
                        
                        <ul class="navber-nav mr-auto">
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>

