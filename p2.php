<html>
<head>
<title>Assignment4</title>
<style type="text/css">
p {
color:white;
font-size:50px;
position: absolute;
top: 20%;
left: 40%;
transform: translate(-50%, -50%);
}
    </style>
</head>
<body style="background-color: black;color: yellow;">
<h2> Clock </h2>
<p>
    The Current  Time is :
    <?php    
        date_default_timezone_set("Asia/Kolkata");
        echo date('h:i:s A');
    ?>.
</p>
</body>
</html>