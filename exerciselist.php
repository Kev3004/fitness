<?php include 'session.php'; ?>
<style>
section.main {
    padding: 70px 0px;
    float: left;
    width: 100%;
}
.create-account {
    width: 30%;
    margin: 0 auto;
    box-shadow: 0px 0px 30px #ccc;
    padding: 35px 35px;
    border-radius: 10px;
}
.tablecover{
    width: 60%;
    margin: 0 auto;
    box-shadow: 0px 0px 30px #ccc;
    padding: 35px 35px;
    border-radius: 10px;
}
.create-account .form-input {
    display: block;
    width: 94%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    outline: none;
}
.create-account h2 {
    text-align: center;
    margin: 0;
    font-size: 30px;
    margin-bottom: 35px;
    font-weight: 500;
}
.create-account .form-fields label {
    margin-bottom: 10px;
    font-size: 15px;
    font-family:
    display: block;
}
.create-account .btn-sub {
    background-color: #ff6801;
    display: inline-block;
    margin-top: 15px;
    padding: 16px 32px;
    border-radius: 3px;
    border: none;
    font-weight: 600;
    font-size: 18px;
    color: #fff;
    outline: none;
    width: 100%;
}
</style>


<?php include 'connection.php';
include 'header.php';
$type=$_GET['type'];
$id=$_SESSION['id'];
$stmt= $conn->prepare("SELECT * from exercise Where exercisetype = ? AND exid = ? ");
$stmt->bind_param("si",$type,$id);
$stmt->execute();
$result=$stmt->get_result();?>
<section class="main">
    <div class="tablecover">
        <h2 class=" text-center text-capitalize"><?=$type?> Workout</h2>
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Exercise No</th>
            <th scope="col">Exercise Name</th>
            <th scope="col">Reps</th>
            <th scope="col">Sets</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php $count=1;
        while($getData= $result->fetch_assoc()){ ?>
        <tr>
            <th scope="col"><?=$count++;?></td>
            <td><?=$getData['exercisename']?></td>
            <td><?=$getData['exercisereps']?></td>
            <td><?=$getData['exerciseset']?></td>
            <td><a href="deleteexercise.php?exerciseid=<?=$getData['exerciseid'];?>" class="btn btn-outline-danger"><i class="bi bi-trash"></i></a></td>
        </tr>
        <?php }  ?>
    </tbody>
</table>
    </div>
</section>