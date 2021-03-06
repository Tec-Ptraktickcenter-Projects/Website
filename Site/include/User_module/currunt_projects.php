<div class="textCenter">
    <p><h3>Nuværene og kommene projektor</h3><p>
</div>
<?php
        $projects_sql = "Select * From userProject 
                            Inner Join project On project.id = userProject.projectId 
                            where userId = $id && end > $tempt_time order by start ASC";
        $projects_result = mysqli_query($db_conn, $projects_sql) or die (mysqli_error($db_conn));
        $temp_any = mysqli_num_rows($projects_result);


if($temp_any >= 1){
    while ($projects_row = mysqli_fetch_assoc($projects_result)){
            $name = $projects_row['name'];
            $start = $projects_row['start'];
            $end = $projects_row['end'];
            $proID = $projects_row['id'];
        ?>
        <a href="?page=Projekt Oversigt&projectId=<?php echo $proID; ?>">
            <div id="projectsholder">
                <div class="textCenter borderbottom"><b><p><?php echo $name; ?></p></b></div>
                <div>
                    <div class="projectStartEnd">
                        <div style="float:left;">
                            <table>
                                <tr>
                                    <td>
                                        <?php $startDate = gmdate("d-m-Y",$start); $endDate = gmdate("d-m-Y",$end); ?>
                                        <?php echo "Start dato: "?>
                                    </td>
                                    <td><?php echo $startDate;?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo "Slut dato: "?>
                                    </td>
                                    <td>
                                        <?php echo $endDate?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="daysleft">
                        <table>
                            <tr>
                                <td>
                                    Dage tilbage: <?php $date = date_create();
                                    $currentDate = date_timestamp_get($date);
                                    $dayLeft = $end - $currentDate;
                                    $PrintDLeft = $dayLeft / 86400 % 2200;
                                    echo $PrintDLeft; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </a>
        <?php
        }
        ?>
    <span style="display:block; clear:both;"></span>
<?php
}
else{
    ?>
    <div class="textCenter"><p><b><?php echo $user_row['fName'].' '. $user_row['lName'].' Har ikke nogen Nuværene eller kommene projektor'; ?></b></p></div>
<?php
}
    