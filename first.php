<!-- <form action = "first.php" method = "post">
   Apple: <input type = "checkbox" name = "fruits[]", value = "apple">
   Orange: <input type = "checkbox" name = "fruits[]", value = "orange">
   Strawberry: <input type = "checkbox" name = "fruits[]", value = "strawberry">

   <input type = "submit">
    </form> -->

<?php

    class course {

        var $faculty;
        var $numStudents;
        var $session;

        function __construct($aFaculty, $aNumStudents, $aSession){

            $this->faculty = $aFaculty;
            $this->numStudents = $aNumStudents;
            $this->session = $aSession;

        }
    }

    $phpCourse = new Course("Kevin Gary", 80, "A");
    echo $phpCourse->faculty;

    
?>