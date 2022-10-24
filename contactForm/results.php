<?php
include 'header.php';
include 'functions.php';
?>

<div class="container-fluid ">
    <div class="row all_cards">
        <div class=" col-12">
            <h1 class="t-title">All Result's</h1>
            <table class="table  table-dark">
                <thead>
                    <tr>
                        <th scope="col-md-2 col-12">id</th>
                        <th scope="col-md-3 col-12">First_name</th>
                        <th scope="col-md-3 col-12">Last_name</th>
                        <th scope="col-md-3 col-12">email</th>
                        <th scope="col-md-2 col-12">Subject</th>
                        <th scope="col-md-2 col-12">Message</th> 
                        <th scope="col-md-2 col-12">Edit/DEL</th> 
                    </tr>
                </thead> 
                <tbody>
                    <tr>            
                        <?php
                        $sql = "SELECT * FROM new_contact";
                        $result = $db->query($sql);
                        echo "<table";
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>'
                                ?>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["First_name"] ?></td>
                                <td><?php echo $row["Last_name"] ?></td>
                                <td><?php echo $row["email"] ?></td>
                                <td><?php echo $row["Subject"] ?> </td>
                                <td><?php echo $row["Message"] ?></td>
                                <td>
                                    <input type="text" class="hidden" name="id" value=<?php echo $row['id'] ?>>
                                    <a class="edit" href="edit.php?id=<?php echo $row["id"] ?> ">Edit</a>
                                    <a href=functions.php?del=<?php echo $row["id"] ?> class="btn btn-danger a-btn-slide-text ">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "</table>";
                    $db->close();
                    ?>                
                </tbody>
            </table>
        </div>
    </div>
</div>