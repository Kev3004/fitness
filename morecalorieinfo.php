<?php include 'header.php';
include 'session.php';
include 'connection.php';
?>
<section class="main">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Meal Name</th>
                <th>Calories</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $date = $_GET['date'];
            $id = $_SESSION['id'];
            $stmt = $conn->prepare('SELECT * from calories WHERE caloid = ? AND date = ? ');
            $stmt->bind_param('is', $id, $date);
            $stmt->execute();
            $result = $stmt->get_result();
            $count = 1;
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td>
                        <?= $count++; ?>
                    </td>
                    <td>
                        <?= $row['mealname']; ?>
                    </td>
                    <td>
                        <?= $row['calories']; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>