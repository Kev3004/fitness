<?php include 'header.php';
include 'session.php';
include 'connection.php';
?>
<section class="main">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Sno</th>
                <th>Date</th>
                <th>Calorie Intake</th>
                <th>Detailed Info</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $id = $_SESSION['id'];
            $stmt = $conn->prepare('SELECT sum(calories) as sum, date from calories WHERE caloid = ? group by date ');
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $count = 1;
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td>
                        <?= $count++; ?>
                    </td>
                    <td>
                        <?= $row['date']; ?>
                    </td>
                    <td>
                        <?= $row['sum']; ?>
                    </td>
                    <td><a href="morecalorieinfo.php?date=<?= $row['date'] ?>" class="btn btn-outline-primary"><i
                                class="fa-solid fa-arrow-right"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>