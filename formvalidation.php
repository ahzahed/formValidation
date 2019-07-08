<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5 font-weight-bold">
            <div class="col-lg-6 m-auto py-5 bg-secondary rounded">
                <form action="view.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Full name">
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['name_err'])){
                                    echo $_GET['name_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['email_err'])){
                                    echo $_GET['email_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['pass_err'])){
                                    echo $_GET['pass_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Re-Password</label>
                        <input type="password" name="repassword" class="form-control" placeholder="Password Again">
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['repass_err'])){
                                    echo $_GET['repass_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['dob_err'])){
                                    echo $_GET['dob_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Select your visited country</label>
                        <select name="country[]" class="form-control" multiple>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="India">India</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Nepal">Nepal</option>
                        </select>
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['country_err'])){
                                    echo $_GET['country_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class="form-group font-weight-normal">
                        <label for="exampleInputPassword1" class="d-block font-weight-bold">Select your hobbies</label>
                        <input type="checkbox" name="hobby[]" value="Football">Football
                        <input type="checkbox" name="hobby[]" value="Cricket">Cricket
                        <input type="checkbox" name="hobby[]" value="Pool">Pool
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['hobby_err'])){
                                    echo $_GET['hobby_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="comment">Write your self</label>
                    <textarea class="form-control" rows="5" id="comment" name="message" placeholder="Write less than 10 words"></textarea>
                        <div class="text-center text-danger">
                            <?php
                                if(!empty($_GET['msg_err'])){
                                    echo $_GET['msg_err'];
                                }
                            ?>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>