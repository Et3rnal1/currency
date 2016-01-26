<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                width: 1160px;
                margin: 100px auto;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 96px;
                margin-bottom: 100px;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>

        <div class="container">
            {!! $converter->render() !!}
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="{{ asset('vendor/converter/currency-converter.js') }}"></script>
    </body>
</html>
