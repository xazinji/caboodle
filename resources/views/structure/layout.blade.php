<!doctype html>
<html {{ language_attributes() }}>
<head>
    <meta charset="{{ bloginfo("charset") }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    {{ wp_head() }}
</head>
<body {{ body_class() }}>

@yield('content')

</body>
</html>