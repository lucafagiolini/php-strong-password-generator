<?php
if (isset ($_GET['lenght'])) {
    $length = $_GET['lenght'];

    function generatePassword($length)
    {
        $charachters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $charachters[rand(0, strlen($charachters) - 1)];
        }
        return $password;
    }

    $password = generatePassword($length);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>



    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- framework -->
    <link rel="stylesheet" href="./css/framework.css">

    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/39dc9eb8ed.js" crossorigin="anonymous"></script>
</head>




<body data-bs-theme="dark">
    <div class="container">
        <form id="password_generator_form" method="GET" class="row g-3 d-flex justify-content-center">

            <div class="col-auto">
                <label for="lenght" class="col-form-label">Chose a number of characters for your
                    password</label>
            </div>
            <div class="col-auto">
                <input type="number" id="lenght" name="lenght" min="1" required class="form-control"
                    aria-describedby="passwordHelpInline">
                <button type="submit" value="Generate Password" class="btn btn-primary">Submit</button>
                <div>
                    <?php
                    if (isset ($password)) {
                        echo "<p>Your generated password is: $password</p>";
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>




    <!-- ******** LIBRARIES AND FRAMEWORKS ******** -->

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="./js/script.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>