<?php

include "header.php";


if ($auth){
    echo 'ავტორიზებული მომხმარებელისთვის გვერდი';
}else{
    echo 'არაავტორიზებული მომხმარებლისთვის გვერდი!';
}



include "footer.php";


?>