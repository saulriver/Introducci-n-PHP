<head>
    <title>Template PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
            .jumbotron{
                background-color: #263859;
            }
            #per{
                text-align:center; 
                color: #E2E1DB;

            }
    </style>
</head>

<div class="jumbotron">
    <h1 id="per">PHP MVC</h1>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">MVC con PHP</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?action=home">Home</a></li>
            <li><a href="index.php?action=page1">Page 1</a></li>
            <li><a href="index.php?action=page2">Page 2</a></li>
            <li><a href="index.php?action=page3">Page 3</a></li>
        </ul>
    </div>
</nav>