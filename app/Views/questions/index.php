    <div class="container">
        <div class="d-sm-flex align-item-center justify-content-between mt-3 mb-4">
            <h1 class="h3 mb-4">Transaction Form</h1>
            <!-- <a href="" class="btn btn-primary">Transaction Form</a> -->

        </div>
        <a href="<?= site_url('questions/add') ?>">Add</a>

        <div class="row">
            <div class="col-xl-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Question Type</th>
                            <th scope="col">Question</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($table as $question): ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $question['subject']; ?></td>
                            <td><?= $question['types']; ?></td>
                            <td><?= $question['question']; ?></td>
                            <td>
                                <a href="<?= base_url('questions/edit' . '/' . $question['question_id']);?>">Edit</a>
                                <a href="<?= base_url('questions/delete' . '/' . $question['question_id']);?>">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>