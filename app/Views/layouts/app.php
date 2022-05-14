<!DOCTYPE html>
<html lang="en" class="fixed sidebar-light">

<head>
 <?= $this->include('layouts/head') ?>   
</head>

<body>


    <?= $this->include('layouts/navbar') ?> 
    <?= $this->include('layouts/sidebar') ?>    
     <?= $this->renderSection('main-content') ?>


    <?= $this->include('layouts/footer') ?>     

    
</body>

</html>