<?php
/**
 * Created by PhpStorm.
 * User: Krishna
 * Date: 5/13/2020
 * Time: 12:38 PM
 */

$slug = $_GET['slug'];
$location_code = $_GET['location_code'];
if (empty($slug)) {
    $results = DB::query("SELECT name,slug from programmes");
    ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <?php
        foreach ($results as $row) {
            echo "<tr>";
            echo "<td><a href='?slug=" . $row['slug'] . "'>" . $row['name'] . "</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php
} elseif (!empty($slug) && !empty($location_code)) {
    $results = DB::query("SELECT * from routes where programme_slug = %s and origin = %s", $slug, $location_code);
    ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">From</th>
            <th>Destination</th>
            <th>Programme</th>
            <th>Content</th>
        </tr>
        </thead>

        <?php
        foreach ($results as $row) {
            ?>
            <?php
            echo "<tr>";
            echo "<td>" . $row['origin'] . "</td><td>" . $row['destination'] . "</td>";
            ?>
            <td><?php echo $row['programme_slug']; ?></td>
            <?php
            echo "<td>";
            $unsz = unserialize($row['data']);
            if (!empty($unsz)) {
                ?>
                <table class="table table-striped table-sm">
                    <tr>
                        <td>Trip Type</td>
                        <td>Class</td>
                        <td>Level</td>
                        <td>Points</td>
                    </tr>
                    <?php
                    sort($unsz);
                    foreach ($unsz as $item) {
                        ?>
                        <tr>
                            <td><?php echo $item['trip_type']; ?></td>
                            <td><?php echo $item['class']; ?></td>
                            <td><?php echo $item['level']; ?></td>
                            <td><?php echo $item['points']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            }
            //echo "<pre>";print_r($unsz);echo "</pre>";
            echo "</td>";
            echo "</tr>";
            ?>
            <?php
        } ?>
    </table>


    <?php
} elseif (!empty($slug)) {
    ?>

    <?php
    $results = DB::query("SELECT distinct r.origin,s.location_name from routes r inner join scan_routes s on r.origin=s.location_code where r.programme_slug = %s", $slug);
    ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">Origin</th>
        </tr>
        </thead>
        <?php
        foreach ($results as $row) {
            ?>
            <?php
            echo "<tr>";
            echo "<td><a href='?slug=" . $slug . "&location_code=" . $row['origin'] . "'>" . $row['location_name'] . "</a></td>";
            echo "</tr>";
            ?>

            <?php
        } ?>
    </table>
    <?php
} //endif slug