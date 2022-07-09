<html lang="en">
<head>
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}">

</head>

<body id="bg">
    <div class="page-wraper">
        <div class="page-content bg-white">
            <h1>{{ $title }}</h1>

            <p>{{ $body }}</p>



            <p>Thank you</p>
        </div>
    </div>
</body>

</html>
