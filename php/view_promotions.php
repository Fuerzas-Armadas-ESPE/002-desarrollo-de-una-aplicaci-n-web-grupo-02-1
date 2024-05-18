<article id="view_promotions">
    <h2 class="major">Promociones</h2>
    <?php
    require_once 'config/bdconection.php';
    $query = "SELECT * FROM promotions";
    $query_run = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($query_run)) {
        $rows[] = $row;
    }
    foreach ($rows as $row):
    ?>
    <?php
    $date = date('Y-m-d H:i:s');
    
    if ($date >= $row['start_date'] && $date <= $row['end_date'] && $row['p_active'] == 1) {
        echo '<h3>Promocion valida</h3>';
        echo '<h5>desde:'. htmlspecialchars($row['start_date']).'</h5>';
        echo '<h5> hasta:'. htmlspecialchars($row['end_date']).'</h5>';
        echo '<blockquote>';
            echo htmlspecialchars($row['description']);
        echo '</blockquote>';
        echo '<span class="image main"><img src="'. htmlspecialchars($row['image_route']).'" alt="'.htmlspecialchars($row['p_code']).'" /></span>';
    } else {
        continue;
    }
    ?>    
    <?php
    endforeach;
    //close connection
    mysqli_close($conn);
    ?>

</article>