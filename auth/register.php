<?php include('../core/config.php') ?>
<?php include('/layouts/header.php') ?>
<?php
    if (isset($_POST) && !empty($_POST)) {        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = md5($_POST['password']);

        $errors = [];

        if($name == ''){
            $errors[] = 'Name is required.';
        }

        if($email == ''){
            $errors[] = 'Email is required.';
        }

        if($password == ''){
            $errors[] = 'Password is required.';
        }

        if($phone == ''){
            $phone = 0;
        }

        if(empty($errors)){
            $insert_sql = "INSERT INTO `users` (name, email, phone, password) VALUES('$name', '$email', '$phone', '$password')";
            if(mysqli_query($connection, $insert_sql)){
                echo "You have been registered successfully!";
            }else{
                echo "Unable to register, Please try again. ". mysqli_error($connection);
            }
        }

        foreach($errors as $error){
            echo "<p class='text-danger'> $error </p>";
        }
    }
?>
    <h2 class="mt-4">Register Page</h2><hr/>

    <div class="form">
        <form action="" method="post">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>

            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
<?php include('../layouts/footer.php') ?>