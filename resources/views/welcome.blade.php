<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->

        <!-- Styles -->
         <title>enterj</title>
                 <!-- Latest compiled and minified CSS -->
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="/bootstrap/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
        <link href="/bootstrap/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
        <!-- jQuery library -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery-ui.min.js"></script>
        <script src="/assets/js/jquery-animateNumber.js"></script>
        <script src="/assets/js/chosen.jquery.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            
            body { 
                background: url(/images/main_back.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }  
            .logo {
                height: 100%;
                animation-duration: 4s;
                animation-timing-function: ease-in-out;
                animation-name: bounceIn;
            } 
            .title {
                padding: 3vw 0;
                font-size: 4.5vw;
                color: white;
                animation-name: bounceOn;
                animation-duration: 2s;
                animation-timing-function: ease-in-out;
            }
            .title-logo { 
                margin-top:10vh; 
            }
            @keyframes bounceOn {
                0% {
                    transform: scale(0);
                    opacity: 0;
                }
              
                100% {
                    transform: scale(1);
                }
            }
            .btn-e
            {
                position:absolute; 
                bottom:40px;
                right:135px;

            }
            .btn-c
            {
                position:absolute; 
                bottom:40px; 
                right:40px;
            }
            
            @media only screen and (min-width: 768px) and (orientation: portrait) {
              
                body {
                    background: url(/images/main_back.jpg) no-repeat center center fixed; 
                    -webkit-background-size: 100% 40%;
                    -moz-background-size: 100% 40%;
                    -o-background-size: 100% 40%;
                    background-size: 100% 40%;

                }
                .title-logo
                { 
                   margin-top:30vh; 
                }

                .btn-e
                {
                    position:absolute; 
                    bottom:33vh;
                    right:135px;

                }

                .btn-c
                {
                    position:absolute; 
                    bottom:33vh; 
                    right:40px;
                }
            }

            @media only screen and (max-width: 767px) and (orientation: portrait) {
              
                body {
                    background: url(/images/main_back.jpg) no-repeat center center fixed; 
                    -webkit-background-size: 100% 35%;
                    -moz-background-size: 100% 35%;
                    -o-background-size: 100% 35%;
                    background-size: 100% 35%;

                }
                .title-logo
                { 
                   margin-top:30vh; 
                }

                .btn-e
                {
                    position:absolute; 
                    bottom:31vh;
                    right:90px;
                    padding: 5px 10px;
                    font-size: 12px;
                    line-height: 1.5;
                    border-radius: 3px;

                }
                .btn-c
                {
                    position:absolute; 
                    bottom:31vh; 
                    right:30px;
                    padding: 5px 10px;
                    font-size: 12px;
                    line-height: 1.5;
                    border-radius: 3px;
                }
            }


            @keyframes bounceIn {
                0% {
                    transform: scale(5);
                    opacity: 0;
                }
                50% {
                    transform: scale(5);
                    opacity: 0;
                }
              
                100% {
                    transform: scale(1);
                    opacity: 1;
                }
            }
        </style>

    </head>
    
    <body>
        <div class="title-logo">
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2"></div>
            <div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 title"><span style="font-weight:bold; letter-spacing:0.1em;">JT.Global Enterprise</span></div>
            <div class="col-md-2 col-sm-2 col-lg-2 col-xs-2 " style="height: 10vw;">
                <img class="logo" src="/images/stamp.png">
            </div>
        </div>
        <div>
            <a href="＃"
               class="btn btn-primary btn-lg btn-e">
                English
            </a>
            <a href="chinese"
               class="btn btn-primary btn-lg btn-c" >
                中  文
            </a>      
        </div>
    </body>
</html>

