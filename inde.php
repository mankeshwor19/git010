<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Crusher System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        
      
    body {
        background-color: #000;
        color: ghostwhite;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        background-image: url("jcb.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100%;
        position: relative; /* Add this line */
    }

    /* Add a semi-transparent overlay */
    body::before {
        content: "";
        background: rgba(0, 0, 0, 0.5); /* Adjust the opacity (0.5 for 50% transparency) */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: whitesmoke;
            padding: 0 25px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Welcome To
            </div>
            <div class="title m-b-md">
                Crusher Management System
            </div>

            <div class="links">
            <!-- For more projects: Visit NetGO+  -->
                <a href="cms/admin/index.php">Admin Log In</a>
                
                <a href="cms/customer/index.php">Customer Log In</a>
            </div>
        </div>
    </div>
</body>

</html>