<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>Exercice 3</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center bg-dark text-white">
                <div class="col-md-12">
                    <p>
                        <?php
                        setlocale(LC_TIME, 'fr_FR.utf8');
                        echo strftime('%A %d %B %Y');
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
