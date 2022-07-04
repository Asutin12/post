<html>
    <head>
        <title>Hello/Index</title>
        <style>
            body {font-size:16pt; color:#999;}
            h1 {font-size:100pt; text-align:right; color:#f6f6f6; margin:-20px 0px -13px 0px; letter-spacing:-4pt;}
        </style>
    </head>
    <body>
            <form method="post" action="/hello">
                @csrf
                <input type="text" name="msg">
                <input type="submit">
            </form>
    </body>
</html>
