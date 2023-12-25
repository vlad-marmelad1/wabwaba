<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" id="theme">
    <title>Konstruct</title>
</head>
<body>
    <a href="header.php">header</a>
    <a href="navbar.php">navbar</a>
    <a href="about.php">about</a>
    <a href="services.php">services</a>
    <a href="newsletter.php">newsletter</a>
    <a href="footer.php">footer</a>
    <header class='header'>
        <?php echo $header; ?>
    </header>
    <section class="navbar">
        <?php echo $navbar; ?>
    </section>
    <section class="about">
        <?php echo $about; ?>
    </section>
    <section class="services">
        <?php echo $services; ?>
    </section>
    <section="newsletter">
        <?php echo $newsletter; ?>
    </section>
    <section="footer">
        <?php echo $footer; ?>
    </section>
    <script src="./tema.js"></script>
    <script defer src="./DOM.js"></script>
</body>