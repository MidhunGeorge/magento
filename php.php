



    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $con = mysqli_connect("localhost", "root", "root","test");

     

    // Check connection

    if($con == false)
    {

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     /*$db_connect = msql_select_db('test',$con);

     if($db_connect == false){

        die("ERROR: Could not connect. ");

    }*/

    // Attempt insert query execution

    $sql = "INSERT INTO student (id, name, address,age) VALUES (2, 'Asitha', 'kalingal',22)";


    if(mysqli_query($con, $sql)){

        echo "Records added successfully.";

    } 
    else
    
    {

        echo "ERROR: Could not able to execute $sql. " ;

    }

     $result="select id,name,address,age from student";

     if($check = mysqli_query($con, $result)){

    if(mysqli_num_rows($check) > 0){

        echo "<table border=1 >";

            echo "<tr>";

                echo "<th>Id</th>";

                echo "<th>Name</th>";

                echo "<th>Address</th>";

                echo "<th>Age</th>";

            echo "</tr>";
                    while($row = mysqli_fetch_array($check)){

            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";

                echo "<td>" . $row['name'] . "</td>";

                echo "<td>" . $row['address'] . "</td>";

                echo "<td>" . $row['age'] . "</td>";

            echo "</tr>";
        }

            echo "</table>";
            
            //mysqli_free_result($check);

    } 
    else
    {

        echo "No records matching your query were found.";

    }

} 

else
{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

}

    // Close connection

    mysqli_close($con);

    ?>

