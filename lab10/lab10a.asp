<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab10a - Nidhi</title>
</head>
<body>

    <style>
        .contain{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        
        }

        h2{
            font-size: xx-large;
            color : red;
            border: 2px solid black;
        }
    </style>
    <%
    bgcolor = Request.QueryString("BackgroundColor")
    Response.Write("<body class='contain' style='background-color: " & bgcolor & "'>")
    last_visit = Request.Cookies("last_time")
        if last_visit = "" then
            Response.Write("<p class='h2'>Welcome! You are visiting this page for the first time</p>")
            Response.Cookies("last_time") = Now
        else
            Response.Write("<p class='h2'>Your last visit on this page was on: " & last_visit & "</p>")
            Response.Cookies("last_time") = Now
        end if
        Response.Write("</body>")
    %>
</body>
</html>