<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Update Transaction Form </h3>
                <hr>
                <form class="" action="/questions/kemaskini" method="post">
                    <div class="row">
                    <div class="col-12">
                            <div class="form-group">
                                <label for="question_id"></label>
                                <input type="hidden" class="form-control" name="question_id" value="<?= $forEdit['question_id']; ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" value="<?= $forEdit['subject']; ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="types">Type of question</label>
                                <input type="text" class="form-control" name="types" value="<?= $forEdit['types']; ?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" class="form-control" name="question" value="<?= $forEdit['question']; ?>">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <a href="<?= base_url('questions');?>">Back</a>
                            <button type="submit" value="update" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>