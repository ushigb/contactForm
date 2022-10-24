<?php
include 'header.php';
include 'functions.php';
?>

<div class="container ">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Промени информацията</h1>
            <form method="post" class="contact">
                <div class="container "> 

                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="hidden" name="id" value=<?php echo $_GET['id'] ?>>
                            <label class="form-label">First name*</label>
                            <input type="text" class="form-control" name="updateFirst_name" value="" >
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Last name</label>
                            <input type="text" class="form-control" name="updateLast_name" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">e-Mail*</label>
                            <div class="input-group ">
                                <input type="email" class="form-control" name="update_email" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Subject*</label>
                            <div class="input-group ">
                                <input type="text" class="form-control" name="updateSubject" value="" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServer05" class="form-label">Message*</label>
                            <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea" aria-describedby="validationServer03Feedback" name="updateMessage" value=""></textarea>
                            <div id="validationServer05Feedback" class="invalid-feedback">
                                Please provide a message.
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="edit_btn">Edit</button>
                        </div>
                    </div>
                    <div class="errors"> <?php echo display_error(); ?></div>
                </div>
            </form>
        </div>
        <div class="col-md-3 go-result">
            <a href="results.php">Go to result's</a>
        </div>
    </div>
</div>
