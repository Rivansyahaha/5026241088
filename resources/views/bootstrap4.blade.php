<!DOCTYPE html>
<html lang="en">

<head>
    <title>BS4 Input Groups</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="inputgroups.css">
    <style>
        .logoig {
    width: 70px;
    margin-top: 50px;
    margin-left: 40px;
}

.kalimat {
    text-align: center;
    width: 450px;
    margin: auto;
    margin-top: 30px;
}

.gambar {
    width: 350px;
    display: block;
    margin: auto;
    margin-top: 20px;
    border-radius: 15px;
}

.col-10 {
    margin: auto;
}

    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row vh-100">
            <!-- kiri -->
            <div class="col border">
                <img class="logoig" src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png">
                <div class="kalimat">
                    <h2>See everyday moments from your close friends.</h2>
                </div>
                <img class="gambar"
                    src="https://www.qiscus.com/id/wp-content/uploads/sites/2/2022/04/cara-repost-postingan-instagram.jpg">
            </div>
            <!-- kanan -->
            <div class="col border">
                <div class="row vh-100">
                    <div class="col-1 "></div>
                    <div class="col-10">
                        <p class="mb-0"><b>Log into Instagram</b></p>
                        <br>
                        <!-- input username -->
                        <div class="input-group mb-2 input-group-lg">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio">
                                </div>
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <!-- input email -->
                        <div class="input-group mb-3 input-group-lg">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio">
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <span class="input-group-text">@gmail.com</span>
                            </div>
                        </div>
                        <!-- password -->
                        <div class="input-group mb-3 input-group-lg ">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <!-- login -->
                        <button type="button" class="btn btn-primary w-100 mt-2 mb-4">Log in</button>
                        <p class="text-center"><a href="#">Forgot password?</a></p>
                    </div>
                    <div class="col"></div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
