<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Hello, <?= session()->get('username') ?></h1>
        </div>
    </div>
</div>
<section class="question-section">
    <div class="container">
        <?php if($questionsView): ?>
        <?php foreach ($questionsView as $displayQuestions): ?>
        <h3><?= $displayQuestions['subject'] ?></h3>
        <?php endforeach; ?>
        <?php else: ?>
        <p class="text-center">No question have been found!</p>
        <?php endif; ?>
    </div>
    <?php
    echo "<pre>";
    print_r($questionsView);
    echo "</pre>";
    ?>
    <?php if(session()->get('success')): ?>
    <div class="alert alert-success" role="alert">
        <?= session()->get('success') ?>
    </div>
    <?php endif; ?>


    <a href="<?= site_url('questions/add') ?>">Add</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Subject</th>
                <th>Question Type</th>
                <th>Question</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1;?>
            <?php foreach ($table as $question): ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $question['question_id']; ?></td>
                <td><?= $question['subject']; ?></td>
                <td><?= $question['types']; ?></td>
                <td><?= $question['question']; ?></td>
                <td>
                    <a href="<?= base_url('questions/edit' . $question['question_id']);?>">Edit</a>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</section>