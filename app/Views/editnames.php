<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>

    <style>

    .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
    <div class="container mt-4">
        <h1>CodeIgniter Update </h1>
        <hr>

        <div class="mt-3">
            <form id="update-from" action="<?= site_url('/update'); ?>" method="post" name="update_user">
            <input type ="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
            <div class="from-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $user_obj['name']; ?>">
            </div>
            <div class="from-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user_obj['email']; ?>">
            </div>
            <div class="from-group">
                <input type="submit" class="btn btn-primary mt-2" value="update Data">
            </div>
            </from>
        </div>
    <div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script>
        if ($("#update-from").length > 0) {
            $("#update-from").validate({
                rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    maxlength: 60,
                    email: true,
                },
                },
                messages: {
                name: {
                    required: "Name is required.",
                },
                email: {
                    required: "Email is required.",
                    email: "It does not seem to be a valid email.",
                    maxlength: "The email should be or equal to 60 chars.",
                },
        },
      })
    }
    </script>                        
</body>
</html>