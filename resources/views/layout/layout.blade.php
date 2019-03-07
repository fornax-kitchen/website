<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="@lang('general.website.keywords')">
    <meta name="description" content="@lang('general.website.description')">
    <meta name="author" content="@lang('general.website.author')">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="canonical" href="{{ config('app.url') }}">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/compiled.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Dosis:200,400,500,600">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="@lang('general.website.description')">
    <meta property="og:image" content="{{ asset('assets/img/og-fornax-studio-img.jpg') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta name="twitter:card" content="summary_large_image">
</head>

<body class="@stack('body-class')">
@yield('page')
<script src="{{ asset('assets/js/compiled.js') }}"></script>
{!! NoCaptcha::renderJs() !!}
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4753846.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123394344-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-123394344-1');
</script>
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hjfunction(){(h.hj.q=h.hj.q[]).push(arguments)};
        h._hjSettings={hjid:1227186,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-%27,%27.js?sv=%27);
</script>
@stack('scripts')
<script>@stack('code')</script>
</body>
</html>