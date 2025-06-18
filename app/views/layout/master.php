<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    
    <!--CSS-->
   <link rel="stylesheet" href="assets/css/master.css">

    <!--CSS opcional por página)-->
    <?= $this->section('styles') ?>

    <title><?= $this->e($title) ?></title>

</head>

<body>
    
  <div class="container-grid">
        <?= $this->insert('partials/header') ?>
         <?= $this->insert('partials/sidebar') ?>
        

        <div class="content">
            <?= $this->section('content') ?>
        </div>

        <?= $this->insert('partials/footer') ?>
    </div>


    <!--JS-BOOTSTRAP-->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    

       <!-- Sidebar-->
     <script src="/assets/js/sidebar.js"></script>

    <!-- JS específico por página -->
    <?= $this->section('scripts') ?>

</body>

</html>