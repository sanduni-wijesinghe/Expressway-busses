<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hw";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "";


        $start = $_POST["loc1"];
        $end = $_POST["loc2"];



        $sql = "SELECT * FROM bustimetable where StartLocation='$start' and EndLocation='$end'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {


            //  echo 'Start: ' .$row["StartTime"]. ' End :' .$row["EndTime"];
              echo'

              <style>
              table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;

              }

              td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
              }

              tr:nth-child(even) {
                background-color: #dddddd;
              }
              </style>
<center>
              <table align="center" border="5">
                  <tr>
                     <td>Start Time</td>
                     <td>End Time</td>
                  </tr>
                     <td>'.$row["StartTime"]. ' </td>
                     <td>'.$row["EndTime"]. ' </td>
                  <tr>

                  </tr>
             </table></center>'

             ;

            }


        } else {
            echo "<font color='red'> Ooops ! No Datas ! </font>";
        }
        $conn->close();
        ?>
