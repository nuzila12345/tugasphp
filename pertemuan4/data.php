<?php
    echo date("1, d-M-Y");

echo time();
echo date("1", time()-60*60*24*100);

echo date("1", mktime(0,0,0,8,25,1985));

echo date("1", strtotime("25 aug 1985"));
?>