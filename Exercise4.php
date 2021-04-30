<!doctype html>
<html lang="en">
<head>
    <title>PHP OOP Classes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
                                    <h3 class="mb-4">Exercise Number 4</h3>
                                </div>
                                <div class="w-100">
                                </div>
                            </div>
                            <form validateMe="exercise4.php" method="post" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="address">Address</label>
                                    <input type="text" name="address" placeholder="Enter your address" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="age">Age</label>
                                    <input type="text" name="age" placeholder="Enter your age" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="contactNumber">Phone Number</label>
                                    <input type="phonenumber" name="contactNumber" placeholder="Contact number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3"
                                        name="submit">Enter</button>
                                </div>
                                <?php
                                class ValidateInfo{
                                public function __construct(){
                                $this->var1 = isset($_POST['name']) ? $_POST['name'] : null;
                                $this->var2 = isset($_POST['address']) ? $_POST['address'] : null;
                                $this->var4 = isset($_POST['age']) ? $_POST['age'] : null;
                                $this->var3 = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : null;
                            }
                            public function validateMe(){
                                if (!preg_match("/^[a-zA-z]*$/", $this->var1)) {
                                    echo '<script>alert("Only alphabets and whitespace are allowed")</script>';
                                } else if($this->var1=="") {
                                    echo $this->var1 . " Enter a valid name<br>";
                                }else{
                                    echo $this->var1 ." is valid name<br>";
                                }
                                if(!preg_match("/^[a-z ,#-\'\/]{3,50}$/i", $this->var2)){
                                   echo '<script>alert("Sorry your address in invalid")</script>';
                                }else{
                                    echo $this->var2 ." address is valid<br>";
                                }
                                if ($this->var4 <= 18) {
                                    echo '<script>alert("Sorry your age is not legal")</script>';
                                } else {
                                    echo $this->var4 ." is a legal age<br>";
                                }
                                $length = strlen($this->var3);
                                if ($length < 11 || $length > 11    ) {
                                    $ErrMsg = $this->var3 ." is invalid phone number";
                                    echo '<script>alert("Sorry your phone number is invalid")</script>';
                                } else {
                                    echo $this->var3 ." is a valid phone number";
                                }
                            }
                        }
                        $validate = new ValidateInfo();
                        $validate->validateMe();?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
