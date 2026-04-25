<!DOCTYPE html>
<html lang="en">

<head>
    <title>Linktree Ursnacks Indonesia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #a6a8aa;
            padding-top: 40px;
            margin: 0;
        }

        .container {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            background-color: #ebeef1;
            max-width: 580px;
            margin: 0 auto;
            height: 100%;
            box-shadow: 0 4px 10px 2px rgba(0, 0, 0, 0.2);
            padding: 0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 28px 24px 0 24px;
        }

        .icon-left,
        .icon-right {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-left img,
        .icon-right img {
            width: 20px;
            height: 20px;
        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-top: 10px;
        }

        .profile>img {
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }

        .profile>h1 {
            text-align: center;
            padding-top: 10px;
            font-size: x-large;
            margin-bottom: 0;
        }

        .nunito-judul {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }

        .profile>p {
            text-align: center;
            font-size: 16px;
        }

        .nunito-deskripsi {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }


        .linked {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 5px;
        }

        .linked>a {
            font-size: 16px;
            margin: 10px 20px;
            padding: 15px;
            border-radius: 7px;
            border: none;
            background-color: white;
            display: flex;
            align-items: center;
            cursor: pointer;
            color: black;
            text-decoration: none;
        }

        .linked>button:hover {
            background-color: #ebeef1;
        }

        .nunito-button {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }

        .logo {
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .tulisan {
            position: static;
            text-align: center;
            color: black;
            flex: 1;
        }

        .bi {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;

        }

        .bi:hover {
            background-color: #e0e0e0;
        }

        .join {
            text-align: center;
            padding-top: 30px;
        }

        .join>a {
            font-size: 16px;
            margin: 5px 10px;
            padding: 10px;
            border-radius: 30px;
            border: none;
            background-color: white;
            cursor: pointer;
            box-shadow: 0 4px 10px 2px rgba(0, 0, 0, 0.2);
            color: black;
            text-decoration: none;
            display: block;
            width: 250px;
            margin: 10px auto;
        }

        .join>a:hover {
            color: black;
            text-decoration: none;
        }

        .nunito-join {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }

        .footer {
            text-align: center;
            padding-top: 20px;
            padding-bottom: 50px;
        }

        .footer>a {
            color: black;
            font-size: 11px;

        }

        .nunito-footer {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <a href="#" class="icon-left">
                <img src="assets/img/logo-linktree.webp">
            </a>
            <a href="#" class="icon-right">
                <img src="assets/img/logo-share.jpeg">
            </a>
        </div>
        <!-- Profil Picture -->
        <div class="profile">
            <img src="assets/img/logo-ursnacks.webp">
            <h1 class="nunito-judul">Ursnacks Indonesia</h1>
            <p class="nunito-deskripsi">Real Fruit Real Goodness</p>
        </div>
        <!-- Linktree Button -->
        <div class="linked">
            <!-- Logo Instagram -->
            <a href="https://www.instagram.com/ursnacksindonesia/" class="nunito-button" role="button">
                <img class="logo" src="assets/img/logo-instagram.webp">
                <span class="tulisan">Ursnack Indonesia | Instagram</span>
                <i href="#" class="bi bi-three-dots-vertical"></i>
            </a>
            <!-- Logo Tiktok -->
             <a href="#" class="nunito-button" role="button">
                <img class="logo" src="assets/img/logo-tiktok.webp">
                <span class="tulisan">Ursnack Indonesia | TikTok</span>
                <i class="bi bi-three-dots-vertical"></i>
            </a>
            <!-- Logo Affiliate -->
             <a href="#" class="nunito-button" role="button">
                <img class="logo" src="assets/img/logo-affiliate.webp">
                <span class="tulisan">Ursnack Affiliate Squad Registration</span>
                <i class="bi bi-three-dots-vertical"></i>
            </a>
            <!-- Logo Reseller -->
             <a href="#" class="nunito-button" role="button">
                <img class="logo" src="assets/img/logo-reseller.webp">
                <span class="tulisan">Reseller | Admin UrSnacks</span>
                <i class="bi bi-three-dots-vertical"></i>
            </a>
            <!-- Logo WA -->
             <a href="#" class="nunito-button" role="button">
                <img class="logo" src="assets/img/logo-wa.webp">
                <span class="tulisan">Partnership or Collaboration</span>
                <i class="bi bi-three-dots-vertical"></i>
            </a>
            <!-- Logo Shopee -->
             <a href="#" class="nunito-button" role="button">
                <img class="logo" src="assets/img/logo-shopee.webp">
                <span class="tulisan">Ursnack Indonesia | Shopee</span>
                <i class="bi bi-three-dots-vertical"></i>
            </a>
            <!-- Logo Tokopedia -->
             <a href="#" class="nunito-button" role="button">
                <img class="logo" src="assets/img/logo-tokped.webp">
                <span class="tulisan">Ursnack Indonesia | Tokopedia</span>
                <i class="bi bi-three-dots-vertical"></i>
            </a>
        </div>
        <!-- Footer -->
        <div class="join">
            <a href="#" class="nunito-join" role="button">Join UrsnacksID on Linktree</a>
        </div>
        <div class="footer">
            <a class="nunito-footer" href="#">Cookie Preferences</a>
            <a>•</a>
            <a class="nunito-footer" href="#">Report</a>
            <a>•</a>
            <a class="nunito-footer" href="#">Privacy</a>
        </div>
    </div>
</body>

</html>
