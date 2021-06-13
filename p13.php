<html>
<head><title>Factorial</title>
<style></style></head>
<body style="background-color: black;color: yellow;">
<center>
<h2> Factorial </h2>
<div style="top: 80; position:relative; text-align: center; ">

    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<button type="submit">Check</button>  
</form> 
<div>
 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        function fac($num)
        {
            $factorial = 1;
            for ($x=1; $x<=$num; $x++)   
            {  
              $factorial = $factorial * $x;  
            }  
                return $factorial;

        }
        $ans=fac($num);
        echo "Factorial of given  number $num is $ans"; 
        
    }    
?> 
</center>
</body>
</html>


