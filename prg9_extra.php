<html>
    <head>
        <title>USN Verification</title>
    </head>
    <body>
        <center>
            <h3><br><b>Name: S Raghav Tejas<br>USN: 1CR17CS119</b></h3>
            <h2>USN CHECK</h2>
            <form method="post">
            <table border="3">
                <tr>
                    <th>Enter USN:</th>
                    <td><input type="text" name="a" value="<?php if(isset($_POST['a'])) { echo  htmlentities($_POST['a']);}?>"></td>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" name="check" value="CHECK"></th>
                </tr>
            
        </form>
        </center>
            <?php
            if(isset($_POST['check']))
            {
                $a=$_POST['a'];
                if(preg_match('/[1-4][A-Z]{2}[1-9]{2}[A-Z]{2}[0-9]{3}/',$a)){
                    echo '<script>alert("Valid usn")</script>';
                }
                else{
                    echo '<script>alert("Invalid usn")</script>';

                }
                echo "</table>";
            }
        
        ?>
    </body>
</html>