<!-- includes/table-of-contents.php -->
<?php if (isset($toc_sections) && !empty($toc_sections)) : ?>
    <nav id="toc" class="col-md-12 rounded-3 p-4 mb-5 toc bg-primary bg-gradient bg-opacity-15">
        <h2>Table of Contents</h2>
        <nav class="nav flex-column">
            <ul class="nav flex-column">
                <?php foreach ($toc_sections as $section) : ?>
                    <li class="nav-item">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-arrow-right text-primary me-2"></i>
                            <a class="nav-link fs-5 fw-semibold text-primary" href="<?= htmlspecialchars($section['url']) ?>">
                                <?= htmlspecialchars($section['title']) ?>
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </nav>
<?php endif; ?>

