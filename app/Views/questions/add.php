<div class="container">
    <div class="row">
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Transaction Form </h3>
                <hr>
                <form class="" action="/questions/add" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="types">Type of question</label>
                                <input type="text" class="form-control" name="types" id="types">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" class="form-control" name="question" id="question">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" value="save" class="btn btn-primary">Save</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>