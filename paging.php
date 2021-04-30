<?php 
    // echo "<ul class='pagination'>";
    echo "<ul class=\"pagination\">";
  
    // First page button
    if($page > 1){
        echo "<li><a href='{$page_url}' title='Go to the first page.'>";
            echo "First Page";
        echo "</a></li>";
    }
      
    // Clickable pages
    $total_pages = ceil($total_rows / $per_page);
      
    // Range of numbers to show
    $range = 2;
      
    $initial_num = $page - $range;
    $condition_limit_num = ($page + $range)  + 1;
      
    for ($x=$initial_num; $x<$condition_limit_num; $x++) {
      
        // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
        if (($x > 0) && ($x <= $total_pages)) {
      
            // Current page
            if ($x == $page) {
                echo "<li class='active'><a href=\"#\">$x <span class=\"sr-only\">(current)</span></a></li>";
            }else {
                echo "<li><a href='{$page_url}page=$x'>$x</a></li>";
            }
        }
    }
      
    // button for last page
    if($page < $total_pages){
        echo "<li><a href='" .$page_url. "page={$total_pages}' title='Last page is {$total_pages}.'>";
            echo "Last Page";
        echo "</a></li>";
    }
      
    echo "</ul>";
?>