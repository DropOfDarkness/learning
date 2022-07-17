<?php foreach ($topScores as $score) : ?>

    <?= $score->username; ?> | <?= $score->score; ?><br/>

<?php endforeach ?>