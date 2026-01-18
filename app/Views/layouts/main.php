<!DOCTYPE html>
<html lang="es">
<?= $this->include("partials/head.php") ?>

<body>
    <?= $this->include('partials/sidebar') ?>
    <?= $this->include('partials/sidebar-history') ?>

    <main class="container-fluid">
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('partials/scripts') ?>
</body>

</html>