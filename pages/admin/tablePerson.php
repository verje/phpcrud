<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
    if (!isset($_SESSION["loggedUser"])) {
        exit("Unable to open admin page");
    } 
    include('../../conn.php');
    $sql = "SELECT * FROM persons";
    $result = $conn->query($sql);
?>
<table>
    <thead>
        <tr>
            <th style="width: 20%;">Name</th>
            <th style="width: 15%;">Phone number</th>
            <th style="width: 20%;">Email</th>
            <th style="width: 20%;">Address</th>
            <th style="width: 5%;">Genre</th>
            <th style="width: 10%;">Role</th>                         
            <th style="width: 5%;">Edit</th>
            <th style="width: 5%;">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row["fullName"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><span class="genreBg <?php echo $row["genre"] ?>"><?php echo $row["genre"] ?></span></td>  
            <td><?php echo $row["role"] ?></td>                      
            <td><a href="editPerson.php?edit=<?php echo $row["idPerson"] ?>"><i
                        class="fa-regular fa-pen-to-square"
                        style="color:var(--myBei)"></i></a></td>
            <td><a href="deletePerson.php?del=<?php echo $row["idPerson"] ?>"><i
                        class="fa-regular fa-trash-can" style="color:salmon"></i></a></td>
        </tr>
        <?php }
        } else {
            echo "0 results";
        } ?>
    </tbody>
</table>