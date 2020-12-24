<?php

include "header.php";

if (isset($_GET['error'])){?>
    <hr>
    <h4 style="color: red;"><?php echo $_GET['error'];?> </h4>
<?php    
}

?>
<hr>
<div id="reg_fomr">

<form action='action/registring.php' method='POST'>
<label for='username'> სახელი: </label>
<input type='text' name='username' placeholder='Enter User Name'><br>
<label for='surname'> გვარი: </label>
<input type='text' name='surname' placeholder='Enter SurName'><br>
<label for='psw'> პაროლი: </label>
<input type='password' name='psw' placeholder='Enter Password'><br>
<label for='psw2'> გაიმეორეთ პაროლი: </label>
<input type='password' name='psw2' placeholder='Confirm Password'><br>
<label for='register'></label>
<input type='submit' name='register' value='sig-up'><br>
</form>

</div>

<?php
include "footer.php";


?>