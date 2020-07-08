<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BotMan Studio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <style>
        body {
            font-family: "Varela Round", sans-serif;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: contain;
            width:100% ;
            height: 100%;
           
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .logo {
            margin-right: 40px;
            margin-bottom: 20px;
        }

        .links a {
            font-size: 1.25rem;
            text-decoration: none;
            color: white;
            margin: 10px;
        }

        @media all and (max-width: 500px) {

            .links {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>
<body style="background-image:url('{{ asset('Img/friendly-chatbot.jpg') }}') ">
<div class="container">
    <div class="content">
      

       
    </div>
    <script id="botmanWidget" src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    <script>
    var botmanWidget= {
        frameEndpoint: '/botman/chat' ,
        title:'ask your automate doctor'  ,
        aboutLink:"",
        aboutText:"more size chat",
        mainColor: "#007bff", 
        bubbleBackground: "#007bff",
         introMessage: "Hi at automate doctor",
     
        
    };
     </script>
  
</div>
</body>
</html>