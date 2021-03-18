<!DOCTYPE html>
<html>
<head>
    <title>Juasoonline Registration Verification</title>
    <style>
        .container {
            margin: 0 auto;
            width: 600px;
        }
        .main {
            padding: 20px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            border: 1px solid #f2f2f2;
            -webkit-box-shadow: 0px 3px 0px 0px #f7f8f9;
            -moz-box-shadow: 0px 3px 0px 0px #f7f8f9;
            box-shadow: 0px 3px 0px 0px #f7f8f9;
            font-size: 11px;
            color: #5D5D66;
            background-color: #FFFFFF;
            pointer-events: auto;
        }
    </style>
</head>
<body>
    <div class="container">

        <!-- Begin main contents -->
        <div class="main">

            <!-- Begin header -->
            <div>
                <img src="{{ asset('logo.png')}}" alt="logo" />
            </div>
            <!-- End header -->

            <!-- Begin body -->
            <div>
                <p>Spam filters often use the ratio of images versus text as a flag to gauge whether an email is legitimate. All-image emails are more likely to be marked as spam versus mixed content emails.</p>
                <div style="text-align: center; padding: 10px; border-radius: 5px; border: solid #ccc 1px; font-size: 25px; font-weight: bolder; width: 20%; margin: 10px auto;">
                    {{ $StoreAdministrator['verification_code'] }}
                </div>
            </div>
            <!-- End body -->

        </div>
        <!-- End main contents -->

        <!-- Begin footer -->
        <div style="text-align: center">
            <p style="font-size: 11px;">You received this email to let you know about important changes to your Juasoonline Account and services.</p>
            <p style="font-size: 11px; margin-top: -3px">© 2021 Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, Ghana</p>
        </div>
        <!-- End footer -->

    </div>
</body>
</html>
