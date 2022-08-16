<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relógio</title>
    <style>
        body {
            font-size: 70px;
        }
    </style>
</head>

<body>
    <div id="data"></div>
    <script>
        const zeroFill = n => {
            return ('0' + n).slice(-2);
        }

        const interval = setInterval(() => {
            const now = new Date();
            const dataHora = zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

            document.getElementById('data').innerHTML = dataHora;
        }, 1000);
    </script>
</body>

</html>
