<?php require "student.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Information Student</title>
    <style>
        .form-group{
            display: flex;
        }
        .form-laber{
            min-width: 70px;
            font-size: 20px;
        }
        .form-control{
            
        }
        .form-input-submit{
            
        }
        .frm,.inf{
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <form action="inf_student.php" method="POST" class="frm">
        <div class="form-group">
            <label class="form-laber" for="Name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-laber" for="Age">Age</label>
            <input type="text" name="age" id="age" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-laber" for="Class">Class</label>
            <input type="text" name="class" id="class" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-laber" for="Exam1">Exam1</label>
            <input type="text" name="exam1" id="exam1" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-laber" for="Exam2">Exam2</label>
            <input type="text" name="exam2" id="exam2" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" class="form-input-submit">
    </form>
    <div class="inf mt-1">
        <h3 class="text-danger">Information students</h3>
        <div class="error">
            <?php echo empty($message) ? '' : $message ?>
        </div>
        <?php if (!empty($data))
        {  ?>
            <div>Name: <?php echo $data->getName() ?></div>
            <div>Age: <?php echo $data->getAge() ?></div>
            <div>Class: <?php echo $data->getClass() ?></div>
            <div>Exam1: <?php echo $data->getExam1() ?></div>
            <div>Exam2: <?php echo $data->getExam2() ?> </div>
            <div>Total: <?php echo $data->getTotal() ?></div>
        <?php 
        } ?>
    </div>
</body>
</html>