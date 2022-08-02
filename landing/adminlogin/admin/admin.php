<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>


 <div class="nav">
    <i class="fa-solid fa-graduation-cap"></i>
    <div class="add1">
        <input type="submit" name="addStudent" value="Students">
    </div>
    <div class="add1">
        <input type="submit" name="addTeacher" value="Teachers">
    </div>
    <div class="add1">
    <input type="submit" name="addParent" value="Parents">
    </div>
    <div class="add1">
        <input type="submit" name="addSubject" value="Subjects">
    </div>
    <div class="add1">
        <input type="submit" name="addClass" value="Class">
    </div>
    <!-- <h2>SANCTA MARIA</h2> -->
 </div>
    <div class="cont">

        <div class="menu">
            <a href="student/register.php"><div class="add">
                <input type="submit" id="student" name="addStudent" value="Add Student">
            </div></a>
            <br>
            <a href="teacher.php"><div class="add">
                <input type="submit" id="teacher" name="addTeacher" value="Add Teacher">
            </div></a><br>

            <a href="regist/parent.php"><div class="add">
            <input type="submit" name="addParent" value="Add Parent">
            </div></a><br>

            <a href=""><div class="add">
                <input type="submit" name="addSubject" value="Add Subject">
            </div><br></a>
            
            <a href=""><div class="add">
                <input type="submit" name="addClass" value="Add Class">
            </div><br></a>
        </div>
        <div  id="monitor" class="monitor">
        </div>

        
    </div>
</body>
</html>