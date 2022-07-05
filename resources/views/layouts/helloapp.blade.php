<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            body {font-size:16pt; color:#999;margin: 5px; text-align: center; margin: 0 auto;}
            h1 {font-size:50pt; text-align:right; color:#f6f6f6; margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
            ul{font-size: 12pt;}
            hr{margin: 25px 0px; border-top: 1px dashed #ddd;}
            .menutitle{font-size: 14pt; font-weight: bold;margin: 0;}
            .content{margin: 0 auto; display: inline-block;}
            .footer{text-align: right; font-size: 10pt; margin: 10px;border-bottom: solid 1px #ccc;color: #ccc;}
            th{background-color: #999; color: fff;padding: 5px 10px;}
            td{border: solid 1px #aaa;color: #999; padding: 5px 10px;}
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">※メニュー</h2>
        <ul>
            <p>・@show</p>
        </ul>
        <hr size="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
