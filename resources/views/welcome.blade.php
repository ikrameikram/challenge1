<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!-- est liée à blade-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ninja network </title>

    </head>
    <body>
       
       <h1> Welcome to ninja world </h1>

       <p> Click on the button bellow to view the list of ninjas. </p>
       <a href="/views/ninjas" class="btn">
       find ninja!
       </a>


    </body>
</html>
