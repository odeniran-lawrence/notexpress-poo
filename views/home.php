<?php 
$pageTitle = 'Homepage';
$pageDescription = "Prenez des notes en toute simplicité avec NoteXpress";
$notes = [
    [
        'title' => 'Note 1',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel pariatur eos optio temporibus, velitecessitatibus animi alias odio nihil rerum commodi rem ea ad nesciunt facilis possimus error similique magnam. Ratione arto, nisi alias dolores quae aliquam.',
        'slug' => 'note-1'
    ],
    [
        'title' => 'Note 2',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel pariatur eos optio temporibus, velit labore offidio nihilmis possimus error similique magnam. Ratione architecto eveniet libero quisquam obcaecati iusto, nisi alias dolores quae aliquam.',
        'slug' => 'note-2'
    ],
    [
        'title' => 'Note 3',
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero vel pariatur eos optio temporibus, velit labore officniet libeusto, nisi alias dolores quae aliquam.',
        'slug' => 'note-3'
    ],
];

?>

<div class="bg-body-tertiary p-5 mb-4 rounded-3">
    <div class="container-fluid py-5">
        <img src="/assets/images/nx-line-dark.svg" alt="logo" width="320">
        <p class="fs-4">
            <?= $pageDescription ?>
        </p>
        <a href="/note/add" class="btn btn-primary btn-lg">Créer une note</a>
    </div>
</div>

<div class="cards  d-flex flex-wrap gap-2 justify-content-center">
    <?php foreach ($notes as $item) : ?>
        <?php include __DIR__ . '/components/note-card.php'; ?>
    <?php endforeach; ?>
</div>