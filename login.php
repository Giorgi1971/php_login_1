<?php

include "header.php";

if (isset($_GET['error'])){
    if($_GET['error'] == "808"){
        echo "მომხმარებელი ან პაროლი არასწორია";
    }else{
        echo $_GET['error'];
    }
}

?>
<hr>
<div id="log_fomr">
<form action='action/logining.php' method='POST'>
    <label for='username'> სახელი: </label>
    <input type='text' name='username' placeholder='Enter User Name'><br>
    <label for='psw'> პაროლი: </label>
    <input type='password' name='psw' placeholder='Enter Password'><br>
    <label for='login'></label>
    <input type='submit' name='login' value='Log-in'><br>
</form>

</div>

<?php

include "footer.php";


?>