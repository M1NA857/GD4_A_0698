<?php
include '../component/sidebar.php'
?>
<!Doctype html>
<html lang="en">

<head>
    <div class="card p-3 m-4 h-100" style="background-color: #FFFFFF; width:100%; border-top: 5px 
      solid #D40013; box-shadow: 11px 20px 20px 20px #aaaaaa; ">
        <h4>MY PROFILE</h4>
        <hr>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<body>

    <div class="card-body">
        <form action="../process/registerProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input class="form-control" id="name" name="name" type="text" value="<?php echo $_SESSION['user']['name'] ?>" readonly aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                <input class="form-control" id="phonenum" name="phonenum" type="text" value="<?php echo $_SESSION['user']['phonenum'] ?>" readonly aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input class="form-control" id="email" name="name" type="text" value="<?php echo $_SESSION['user']['email'] ?>" readonly aria-describedby="emailHelp">
            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Membership</label>
                <input class="form-control" id="membership" name="name" type="text" value="<?php echo $_SESSION['user']['membership'] ?>" readonly aria-describedby="emailHelp">
            </div>


            <div class="d-grid gap-2">

            </div>
        </form>

    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</head>

</html>