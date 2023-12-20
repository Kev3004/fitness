<?php
include 'session.php';
$chest="chest";
$biceps="biceps";
$triceps="triceps";
$back="back";
$shoulder="shoulder";
$legs="legs";
$cardio="cardio";
$abs="abs";
?>
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
<?php include 'header.php'; 
include 'saveexercise.php';?>
<section class="main">
        <div class="create-account">
            <h2>Prepare Your Exercise Schedule</h2>
            <form method="post">
                <div class="form-fields">
                    <label for="">Type of Exercise</label>
                    <select name="type" class="form-select w-75" required>
                     <option value="" selected disabled>Select Your Type
                     </option>
                      <option value="chest">Chest</option>
                       <option value="biceps">Biceps</option>
                        <option value="triceps">Triceps</option>
                        <option value="back">Back</option>
                        <option value="shoulder">Shoulder</option>
                        <option value="legs">Legs</option>
                        <option value="cardio">Cardio</option>
                        <option value="abs">Abs</option>
                        </select>
                </div>
                <div class="form-fields mt-2">
                    <label for="mealname">Exercise Name</label>
                    <input type="text" class="form-input" name="exercise">
                    <input type="hidden" name="exid" value="<?=$_SESSION['id'];?>">
                </div>
                <div class="form-fields">
                    <label for="calories">Reps</label>
                    <input type="text" name="reps" class="form-input"> 
                </div>
                <div class="form-fields">
                    <label for="calories">Sets</label>
                    <input type="text" name="set" class="form-input"> 
                </div>
                <button type="submit" class="btn-sub">Add+</button>
            </form>

        </div>
</section>
<section class="main">
    <div class="tablecover">
        <div class="row text-center">
            <div class="col-md-3">
                <a href="exerciselist.php?type=<?=$chest;?>" class="btn btn-outline-dark btn-lg"><i class="fa-solid fa-dumbbell"></i> Chest</a>
            </div>
            <div class="col-md-3">
            <a href="exerciselist.php?type=<?=$biceps;?>" class="btn btn-outline-success btn-lg"><i class="fa-solid fa-dumbbell"></i> Biceps</a>
            </div>
            <div class="col-md-3">
            <a href="exerciselist.php?type=<?=$triceps;?>" class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-dumbbell"></i> Triceps</a>
            </div>
            <div class="col-md-3">
            <a href="exerciselist.php?type=<?=$back;?>" class="btn btn-outline-warning btn-lg"><i class="fa-solid fa-dumbbell"></i> Back</a>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-3">
                <a href="exerciselist.php?type=<?=$shoulder;?>" class="btn btn-outline-dark btn-lg"><i class="fa-solid fa-dumbbell"></i> Shoulder</a>
            </div>
            <div class="col-md-3">
            <a href="exerciselist.php?type=<?=$legs;?>" class="btn btn-outline-success btn-lg"><i class="fa-solid fa-dumbbell"></i> Legs</a>
            </div>
            <div class="col-md-3">
            <a href="exerciselist.php?type=<?=$cardio;?>" class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-bicycle"></i> Cardio</a>
            </div>
            <div class="col-md-3">
            <a href="exerciselist.php?type=<?=$abs;?>" class="btn btn-outline-warning btn-lg"><i class="fa-solid fa-dumbbell"></i> Abs</a>
            </div>
        </div>
</div>
</section>