<?php
// Course images that include src, alt and url
$images = [
    'cursos-de-ingles' => [
        'src' => BASE_URL . 'assets/images/courses/cursos-de-ingles.png',
        'alt' => 'cursos de ingles',
        'url' => 'https://cursos.englishreservoir.com/'
    ],
    'b2-cambridge-first' => [
        'src' => BASE_URL . 'assets/images/courses/b2_first.png',
        'alt' => 'B2 Cambridge First',
        'url' => 'https://cursos.englishreservoir.com/p/b2-cambridge-first'
    ],
    'c1-cambridge-advanced' => [
        'src' => BASE_URL . 'assets/images/courses/c1_advanced.png',
        'alt' => 'C1 Cambridge Advanced',
        'url' => 'https://cursos.englishreservoir.com/p/c1-cambridge-advanced'
    ],
    'c2-cambridge-proficiency' => [
        'src' => BASE_URL . 'assets/images/courses/c2_pro.png',
        'alt' => 'C2 Cambridge Proficiency',
        'url' => 'https://cursos.englishreservoir.com/p/c2-cambridge-proficiency'
    ],
    'gramatica-esencial' => [
        'src' => BASE_URL . 'assets/images/courses/Gramatica-esencial.png',
        'alt' => 'Gramatica Esencial',
        'url' => 'https://cursos.englishreservoir.com/p/gramatica-esencial-metodo-divertido'
    ],
    'verbos-en-ingles' => [
        'src' => BASE_URL . 'assets/images/courses/verbos-en-ingles.png',
        'alt' => 'Verbos en inglés',
        'url' => 'https://cursos.englishreservoir.com/p/verbos-en-ingles-metodo-divertido'
    ],
    'pronunciacion-en-ingles' => [
        'src' => BASE_URL . 'assets/images/courses/pronunciacion-en-ingles.png',
        'alt' => 'Pronunciacion en ingles',
        'url' => 'https://cursos.englishreservoir.com/p/pronunciacion-en-ingles'
    ],
];
?>

<div class="col-md-12 my-5">
    <?php foreach ($sections as $section): ?>
        <h2 id="<?php echo $section['id']; ?>" class="my-custom-class mt-5"><?php echo $section['title']; ?></h2>

        <?php foreach ($section['content'] as $paragraph): ?>
            <p class="mb-4"><?php echo $paragraph; ?></p>
        <?php endforeach; ?>

        <?php if (!empty($section['bullets'])): ?>
            <?php foreach ($section['bullets'] as $bullet_list): ?>
                <ul class="mb-4">
                    <?php foreach ($bullet_list as $bullet): ?>
                        <li><?php echo $bullet; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (!empty($section['table'])): ?>
            <div class="table-responsive my-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <?php foreach ($section['table']['headers'] as $header): ?>
                                <th class="lead fw-bold"><?php echo $header; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($section['table']['rows'] as $row): ?>
                            <tr>
                                <?php foreach ($row as $cell): ?>
                                    <td><?php echo $cell; ?></td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
        
        <?php if (isset($section['youtube'])): ?>
            <div class="ratio ratio-16x9 my-5">
                <?php echo $section['youtube']; ?>
            </div>
        <?php endif; ?>
        
        <?php foreach ($images as $key => $image): ?>
            <?php if (isset($section[$key]) && $section[$key]): ?>
                <div class="col-12 text-center">
                    <a href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['src']; ?>" class="img-fluid rounded-3 my-5 d-block mx-auto" alt="<?php echo $image['alt']; ?>">
                    </a>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>


