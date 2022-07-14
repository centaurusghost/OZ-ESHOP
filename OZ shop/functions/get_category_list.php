<?php

//session_start();
function get_category_list(){
    include('./db/connect.php');
    $get_category_list_query="select * from category";
   // $get_sub_category_list="";
    $result_category=mysqli_query($con,$get_category_list_query);
    if($result_category){
    while($row=mysqli_fetch_assoc($result_category)){
        $category_id=(int)$row['category_id'];
        $category_name=$row['category_name'];
    echo "<ul> 
    <li><a class=' text-dark px-2' id='cat'.$category_id href='#'>$category_name</a>
                          <ul class=' bg-white position-absolute start-50 top-1 p-2 border border-gray rounded' style='display:none;' id='subcat1'>
                            <li class='nav-item' style='list-style:none;'><a href='#' class='nav-link text-dark'>submenu1</a></li>
                            <li class='nav-item' style='list-style:none;'><a href='#' class='nav-link text-dark'>submenu2</a></li>
                            <li class='nav-item' style='list-style:none;'><a href='#' class='nav-link text-dark'>submenu3</a></li>
                          </ul>
                        </li>
    </ul>";
    
    }  }
}


?>