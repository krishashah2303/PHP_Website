<?php
function pr($arr){
    echo '<pre>';
    print_r($arr);
}

function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
}

function get_book($conn,$type='',$limit=''){
    $sql="select * from book";
    if($type=='letest'){
        $sql.=" order by b_id desc";
    }
    if($limit!=''){
        $sql.=" limit $limit";
    }
    $res=mysqli_query($conn,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}
?>