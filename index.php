<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2287ebfac7.js" crossorigin="anonymous"></script>
</head>
<body>
    <input type="checkbox" id="toogle">
    <label for="toogle" class="show-btn">Show Modal</label>
    <div class="wrapper">
        <label for="toogle" class="cancel-btn"><i class="fa-solid fa-x"></i></label>
        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
        <div class="content">
            <header>Become a Subscriber</header>
            <p>Subscribe to our blog and get the latest update</p>
        </div>
        <form action="#" method="POST">
            <?php
                $userEmail = "";
                if(isset($_POST['subscribe'])){
                    $userEmail = $_POST['email'];
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
                        $subject = "Thanks for your subscribing us";
                        $message = "good to see u";
                        $sender = "From: brangtsawmaung89@gmail.com";
                        if(mail($userEmail, $subject, $message, $sender)){
                            ?>
                            <div class="alert success-alert"><?= $userEmail ?> is not a valid email</div>
                            <?php
                        }else{
                            ?>
                            
                            <?php
                        }
                    }else{
                        ?>
                        <div class="alert error-alert"><?= $userEmail ?> is not a valid email</div>
                        <?php
                    }
                }

            ?>
            <div class="field">
                <input type="text" name="email" placeholder="Email Address" value="<?= $userEmail ?>" required>
            </div>
            <div class="field btn">
                <input type="submit" name="subscribe" value="Subscribe">
            </div>
        </form>
        <div class="text">We do not share your information.</div>
    </div>
</body>
</html>