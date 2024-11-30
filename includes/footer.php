<?php
require_once 'functions.php';
$footer_data = load_json(CENTRAL_PATH . '../data/includes/footer.json');

// JSON data includes
$footerColumns = $footer_data['footerColumns'];
?>

<!-- Footer START -->
<footer class="pt-5 bg-success">

    <div class="container">
        <!-- Row START -->
        <div class="row g-4">

            <div class="row g-4">
                <?php foreach ($footerColumns as $index => $column): ?>
                    <?php if ($index === 0): ?>
                        <!-- Column 1 -->
                        <div class="col-lg-4">
                            <h5 class="mb-2 mb-md-2 text-white font-dosis"><?= $column['heading'] ?></h5>
                            <p class="my-3 lead text-white"><?= $column['paragraph'] ?></p>
                            <!-- Button -->
                            <a href="<?= $column['button']['url'] ?>" class="btn btn-md btn-primary me-2 mb-4 mb-sm-0"><?= $column['button']['label'] ?></a>
                        </div>
                    <?php else: ?>

                        <!-- Columns 2-5 -->
                        <div class="col-lg-2">
                            <h5 class="mb-2 mb-md-2 text-white font-dosis"><?= $column['heading'] ?></h5>
                            <!-- Links -->
                            <ul class="nav flex-column">
                                <?php foreach ($column['links'] as $link): ?>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Divider -->
        <hr class="mt-4 mb-0">
    </div>
</footer>
<!--Footer END -->