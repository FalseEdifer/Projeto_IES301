<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia Atuak</title>
    <script type="text/javascript">
        dayName = new Array ("domingo", "segunda-feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sábado")
        monName = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho", "agosto", "outubro", "novembro", "dezembro")
        var data = new Date();
        document.write ("Hoje é " + dayName[data.getDay() ] + ", " + data.getDate () + " de " + monName[data.getMonth()] + " de "  + data.getFullYear())
</script>
    </script>
</head>
<body>
    
</body>
</html>
