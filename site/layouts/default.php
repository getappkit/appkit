<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $page->title() ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body data-template="<?= $page->template() ?>">
<main>
    <?php slot() ?>
    <?php endslot(); ?>
</main>
<footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
</footer>
</body>
</html>