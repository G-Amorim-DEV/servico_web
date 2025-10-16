<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cartas Yu-Gi-Oh! (Exodia)</title>
    <link rel="stylesheet" href="../desafio_cafe_4/css/Yu-Gi-Oh.css"> 
</head>
<body>
    <h1>As Cinco Partes de Exodia</h1>

    <div class="container-cartas">
        <?php
            require_once "../desafio_cafe_4/service_web_Yu-Gi-Oh.php"; 
        ?>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const cartas = document.querySelectorAll('.carta');

        cartas.forEach(carta => {
            carta.addEventListener('click', function(event) {
             
                event.stopPropagation();
                
                cartas.forEach(otherCarta => {
                    if (otherCarta !== this && otherCarta.classList.contains('expandida')) {
                        otherCarta.classList.remove('expandida');
                    }
                });
                
                this.classList.toggle('expandida');
            });
        });

        document.addEventListener('click', function(event) {
         
            cartas.forEach(carta => {
                carta.classList.remove('expandida');
            });
        });
    });
</script>
</body>
</html>