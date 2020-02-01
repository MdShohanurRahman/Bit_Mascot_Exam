<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        #my-div {
            margin-top: 100px
        }
    </style>
</head>

<body>
    <div id="my-div" align=center>
        sample content it will update 15 seconds
        <br>
    </div>

    <script type="text/javascript">
        function Load_external_content() {
            $('#my-div').load('dynamic.php').hide().fadeIn(3000);
        }
        setInterval('Load_external_content()', 10000);
    </script>

</body>

</html>