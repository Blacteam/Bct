<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BCT SERVER COPY</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Noto+Serif+Bengali&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nosifer&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            background-color: #000;
            color: #ff0000;
            font-family: 'Nosifer', cursive;
            text-align: center;
            padding: 50px 0;
            margin: 0;
            position: relative;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            max-width: 600px;
            margin: 0 auto;
            border: 2px solid #ff0000;
            padding: 30px;
            background: #1a1a1a;
            box-shadow: 0 0 15px #ff0000;
            position: relative;
            z-index: 1;
        }

        .card {
            width: 100%;
            padding: 30px;
            text-align: center;
            background-color: #ffffff;
            border-radius: 15px;
        }

        .icon {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 20px;
        }

        .form-label {
            font-weight: bold;
            color: red;
        }

        .form-control {
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid red;
            padding: 10px;
            width: 90%;
            background: #333;
            color: #ff0000;
            box-shadow: 0 0 5px #ff0000;
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: #ffffff;
            cursor: pointer;
        }

        .btn-warning {
            width: 100%;
            background-color: red;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: white;
            cursor: pointer;
            margin-top: 20px; /* Increased distance */
        }

        .alert-dark {
            font-size: 1rem;
            color: #343a40;
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 3em;
            color: #ff0000;
            text-shadow: 2px 2px 10px #ff0000;
            margin-bottom: 20px;
        }

        .logo {
            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR45jXKfjRKIzk7ZIXM34RziYcm-cz5AX_mRB2Konb2YvpNiEtJUmR8y5w&s=10') no-repeat center center;
            background-size: cover;
            width: 130px;
            height: 130px;
            border-radius: 50%;
            margin: 0 auto;
            animation: rotate 10s linear infinite, horror 2s infinite alternate;
            transition: transform 0.5s, box-shadow 0.5s;
        }

        .logo:hover {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 0 30px #ff0000;
        }

        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes horror {
            0% { transform: translateY(0); }
            100% { transform: translateY(-10px); }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card shadow text-center">
            <img src="https://i.postimg.cc/3wjCYhTC/20240118-094452.png" class="icon logo" alt="Image">
            <h3 class="display-5 mt-3">BCT SV COPY</h3>
            
            <form action="info.php" method="post">
                <div class="alert-dark" role="alert" onmouseover="this.stop()" onmouseout="this.start()">
                BLACK CYBER
                </div>

                <div class="mb-3">
                    <input type="text" placeholder="ENTER NID NO" class="form-control" id="nationalId" name="nationalId" required>
                </div>

                <div class="mb-3">
                    <input type="text" placeholder="YYYY-MM-DD" class="form-control" id="dob" name="dob" required>
                </div>

                <input type="submit" class="btn btn-primary" value="GET INFO">

                <a href="https://t.me/RAJSHAHIKINGS" class="btn btn-warning">
                    JOIN CHANNEL
                </a>
            </form>
        </div>
    </div>

    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>
</html>