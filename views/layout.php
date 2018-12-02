<DOCTYPE html>
    <html>
        <div id="cuerpo">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="views/estilo.css"/>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
            </head>
            <body>
                <header>
                    <nav>
                        <ul>
                            <li><a href='/blog_php_mvc'>Home</a></li>
                            <li><a href='?controller=posts&action=index'>Posts</a></li>
                            <li><a href='?controller=posts&action=viewInsertar'>Insertar</a></li>
                        </ul>
                    </nav>

                </header>

                <?php require_once('routes.php'); ?>

                <footer>
                    <div class="card-footer">
                        <small class="text-muted">Copyright</small>
                    </div>
                </footer>
            </body>
        </div>
    </html>

