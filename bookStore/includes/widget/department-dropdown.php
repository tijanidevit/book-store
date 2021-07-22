<?php 
    $fac_query = $conn->query("SELECT * FROM faculty ORDER BY faculty ASC ");
?>
<ul class="category-menu">
    <?php while ($faculty = $fac_query->fetch_assoc()): ?>
        <li class="cat-item has-children">
            <a href="#"><?php echo $faculty['faculty'] ?></a>
            <ul class="sub-menu">
                <?php 
                    $faculty_id = $faculty['faculty_id'];
                    $dept_query = $conn->query("SELECT * FROM department WHERE faculty_id = $faculty_id ORDER BY dept ASC ");
                    while ($dept = $dept_query->fetch_assoc()):
                ?>
                <li><a href="store?id=<?php echo $dept['department_id'] ?>"><?php echo $dept['dept'] ?></a></li>
                <?php endwhile ?>
            </ul>
        </li>
    <?php endwhile ?>
    
</ul>