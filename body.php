<body class="style">
    <div class="container ">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Свържете се с нас</h1>
                <form method="post" class="contact">
                    <div class="container "> 
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label">First name*</label>
                                <input type="text" class="form-control" name="First_name" value="<?php echo $first_name; ?>" >
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Last name</label>
                                <input type="text" class="form-control" name="Last_name" value="<?php echo $last_name; ?>">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">e-Mail*</label>
                                <div class="input-group ">
                                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Subject*</label>
                                <div class="input-group ">
                                    <input type="text" class="form-control" name="Subject" value="<?php echo $subject; ?>" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationServer05" class="form-label">Message*</label>
                                <textarea class="form-control" placeholder="Leave a message here" id="floatingTextarea" aria-describedby="validationServer03Feedback" name="Message" value="<?php echo $message; ?>"></textarea>
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    Please provide a message.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="sent_btn">Sent</button>
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
</body>