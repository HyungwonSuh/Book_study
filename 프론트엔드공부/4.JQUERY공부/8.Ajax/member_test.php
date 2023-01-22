<?php
    $data = '[
        {'id':'1', 'name' : 'Choldcroft', 'email':'droft@hibu.com'},
        {'id':'2', 'name' : 'Levi', 'email':'Levi@blogger.com'},
        {'id':'3', 'name' : 'Axceil', 'email':'axciel@ebay.com'},
    ]';
    echo $_GET['callback']."(".$data.")";
?>