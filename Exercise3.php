<!doctype html>
<html lang="en">
<head>
    <title>PHP OOP Classes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(background.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Exercise Number 3</h3>
                                </div>
                                <div class="w-100">
                                </div>
                            </div>
                            <form action="" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text" name="email" placeholder="Enter your email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3"
                                        name="submit">Enter</button>
                                </div>
                                <?php
                                class userEmail{
                                public $email;
                                public function __construct(){
                                $this->email = isset($_POST['email']) ? $_POST['email'] : null;
                            }
                                public function validateEmail(){
                                if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                                    echo ("$this->email is a valid email");
                            }
                                    else if($this->email==""){
                                        echo "<script type='text/javascript'>alert('Please Enter an email');</script>";
                                    } else {
                                        echo ("$this->email is invalid email");
                                    }
                                }
                            }
                            $emailVal = new userEmail();
                            $emailVal->validateEmail();
                            ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>