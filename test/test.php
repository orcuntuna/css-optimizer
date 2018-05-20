<!DOCTYPE html>
<html>
<head>
    <title>css-optimizer</title>
    <?php

        include '../class.cssoptimizer.php';
        
        $optimize = new cssOptimizer;
        $cssListe = array(
            '/css/reset.css',
            '/css/main.css',
            '/css/hatali.css'
        );

        $optimize->optimize($cssListe);
        
    ?>
</head>
<body>

</body>
</html>