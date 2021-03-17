<?php

include 'conn.php';

$output='';
$query="SELECT * FROM crudtable WHERE name LIKE '%".$_POST['search']."%'";

$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0){

    $output .='<h1> Search result</h1>';
    $output .='<div class="table-responsive">
    <table class="table table bordered">
    <tr>
    <th>Name</th>
    <th>Password</th>


    </tr>
    ';
    while($row=mysqli_fetch_array($res)){
        $output .='<tr>
        <td>'.$row['name'].'</td>
        <td>'.$row['password'].'</td>
        
        </tr>
        ';

    }
echo $output;
}
else{

    echo "NOT Found !";
}

?>