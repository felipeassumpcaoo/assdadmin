<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title><?= $this->e($title) ?></title>
    
    <!-- CSS global -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    
    <!-- CSS opcional por página -->
    <?= $this->section('styles') ?>
</head>
<body>

    <?= $this->section('content') ?>

    <!-- JS global -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <!-- JS opcional por página -->
    <?= $this->section('scripts') ?>

</body>
</html>
