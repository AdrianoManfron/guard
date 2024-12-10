<!DOCTYPE html>
<html lang="pt-br" data-theme="dracula">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="../Styles/output.css" rel="stylesheet">
    <title>GUARD</title>
</head>

<body>
    <section class="mx-auto max-w-screen-lg h-screen flex flex-col space-y-6">
        <?php require base_path('views/partials/_navbar.view.php'); ?>

        <?php require base_path('views/partials/_search.view.php'); ?>

        <?php require base_path('views/partials/_mensage.view.php'); ?>

        <div class="flex flex-grow pb-6">
            <?php require base_path("views/{$view}.view.php"); ?>
        </div>
    </section>
</body>

</html>