<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href-"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="
sha384-1q8mTJOASx8j1Au+a5WDVnPi21kFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="
sha384-0mSbJDEHialfmuBBQP6A4Qrprq50VfW37PRR3j5ELqxss1yVq0tnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<form action="InsertBack.php" method="post">
    <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" class="form-control" id="first_name">
    </div>
    <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" class="form-control" id="last_name">
    </div>
   <div class="form-group">
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" class="form-control" id="email">
    </div>
    <input type="submit" class="btn btn-danger" value="Submit">
</form>
</body>
</html>