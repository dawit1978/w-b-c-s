<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Course_Model
 *
 * @author ronversa09
 */
class Course_Model extends Model{
    private $query;
    private $itemsPerPage = 30;
    private $filter_ID;
    private $filter_Name;
    private $filter_Desc;
    private $filter_usabililty;
    
    private $course_name;
    private $course_desc;
    private $course_usability;
    
    public function __construct() {        
        parent::__construct();
        
        $this->query = "";
    }
    
    public function getFilter_ID(){
        return $this->filter_ID;
    }
    
    public function getFilter_Name(){
        return $this->filter_Name;
    }
    
    public function getFilter_Desc(){
        return $this->filter_Desc;
    }
    
    public function getFilter_Usabililty(){
        return $this->filter_usabililty;
    }
    
    public function getCourse_Name(){
        return $this->course_name;
    }
    
    public function getCourse_Desc(){
        return $this->course_desc;
    }
    
    public function getCourse_Usability(){
        return $this->course_usability;
    }
    
    /*-----------------------------------------------*/
    
    public function filter($Tdept_name, $Tcourse_name, $Tpage){
        $this->query = mysqli_query($this->connectdb,"select * from courses inner join departments
                                    on courses.Department_ID = departments.Department_ID
                                    where departments.Department_Name like '%$Tdept_name%' and Course_Name like '%$Tcourse_name%' 
                                    order by Course_Name
                                    LIMIT " . (($Tpage - 1) * $this->itemsPerPage) . ", " . $this->itemsPerPage);
        
        $this->filter_ID = array();
        $this->filter_Name = array();
        $this->filter_usabililty = array();
        $this->filter_Desc = array();
        while($row = mysqli_fetch_array($this->query)){
            array_push($this->filter_ID, $row['0']);
            array_push($this->filter_Name, $row['1']);
            array_push($this->filter_Desc, $row['2']);
            array_push($this->filter_usabililty, $row['3']);
        }
    }
    
    /*-----------------------------------------------*/
//    public function filter_ID($Tdept_name, $Tcourse_name, $Tpage){
//        $filter = array();
//        $this->query = mysqli_query($this->connectdb,"select Course_ID from courses inner join departments
//                                    on courses.Department_ID = departments.Department_ID
//                                    where departments.Department_Name like '%$Tdept_name%' and Course_Name like '%$Tcourse_name%' 
//                                    order by Course_Name
//                                    LIMIT " . (($Tpage - 1) * $this->itemsPerPage) . ", " . $this->itemsPerPage);
//        
//        while($row = mysqli_fetch_array($this->query)){
//            array_push($filter, $row['Course_ID']);
//        }
//        
//        return $filter;
//    }
//    
//    public function filter_CourseName($Tdept_name, $Tcourse_name, $Tpage){
//        $filter = array();
//        $this->query = mysqli_query($this->connectdb,"select Course_Name from courses inner join departments
//                                    on courses.Department_ID = departments.Department_ID
//                                    where departments.Department_Name like '%$Tdept_name%' and Course_Name like '%$Tcourse_name%' 
//                                    order by Course_Name  
//                                    LIMIT " . (($Tpage - 1) * $this->itemsPerPage) . ", " . $this->itemsPerPage);
//        
//        while($row = mysqli_fetch_array($this->query)){
//            array_push($filter, $row['Course_Name']);
//        }
//        
//        return $filter;
//    }
    /*-----------------------------------------------*/
    
    public function getQueryPageSize($Tdept_name, $searchName) {
        $this->query = mysqli_query($this->connectdb,"select Course_Name from courses inner join departments           
                                    on courses.Department_ID = departments.Department_ID
                                    where departments.Department_Name like '%$Tdept_name%' and Course_Name like '%$searchName%'");
        
        return mysqli_num_rows($this->query) / $this->itemsPerPage;
    }
    
    public function getListDept_ID_inCourse(){
        $filter = array();
        $this->query = mysqli_query($this->connectdb,"select Department_ID, Course_Name, Usability from courses");
        
        while($row = mysqli_fetch_array($this->query)){
            array_push($filter, array($row['0'], $row['1'], $row['2']));
        }
        
        return $filter;
    }
    
    public function getListOfCourses(){
         $filter = array();
        $this->query = mysqli_query($this->connectdb,"select Course_Name from courses");
        
        while($row = mysqli_fetch_array($this->query)){
            array_push($filter, $row['0']);
        }
        
        return $filter;
    }
    
    public function deleteCourse($key){
        mysqli_query($this->connectdb,"delete from courses where Course_ID = '$key'");
    }
    
    public function insert($course_name, $description, $usability, $dept_ID){
        mysqli_query($this->connectdb,"INSERT INTO `socs`.`courses` (`Course_ID`, `Course_Name`, `Description`, `Usability`, `Department_ID`) 
                    VALUES (NULL, '$course_name', '$description', '$usability', '$dept_ID')");
    }
    
    public function update($key, $newCourseName, $newCourseDesc, $newUsability){
        mysqli_query($this->connectdb,"UPDATE `socs`.`courses` SET `Course_Name` = '$newCourseName',
                    `Description` = '$newCourseDesc', `Usability` = '$newUsability' WHERE `courses`.`Course_ID` ='$key'");
    }
    
    
    /*----------- For Special Purposes ------------*/
    
    public function getDept_ID($dept_name){
        $this->query = mysqli_query($this->connectdb,"select Department_ID from departments where Department_Name like '%$dept_name%'");
        $row = mysqli_fetch_array($this->query);
        
        return $row['Department_ID'];
    }
    
    public function getCourse_Info($key){
        $this->query = mysqli_query($this->connectdb,"select * from courses where Course_ID = '$key'");
        $row = mysqli_fetch_array($this->query);
        
        $this->course_name = $row['Course_Name'];
        $this->course_desc = $row['Description'];
        $this->course_usability = $row['Usability'];
        
    }
    
    public function getCourseID($course_name){
        $this->query = mysqli_query($this->connectdb,"select Course_ID from courses where Course_Name = '$course_name'");
        $row = mysqli_fetch_array($this->query);
        
        return $row['0'];
    }
    
//    public function getCourse_Name($key){
//        $this->query = mysqli_query($this->connectdb,"select Course_Name from courses where Course_ID = '$key'");
//        $row = mysqli_fetch_array($this->query);
//        
//        return $row['Course_Name'];
//    }
//    
//    public function getCourse_Desc($key){
//        $this->query = mysqli_query($this->connectdb,"select Description from courses where Course_ID = '$key'");
//        $row = mysqli_fetch_array($this->query);
//        
//        return $row['Description'];
//    }
    
    
    /*------- for testing existing name --------*/
    
    public function isExist($course_name, $description){
        $this->query = mysqli_query($this->connectdb,"select count(Course_Name) from courses where course_name = '$course_name' OR 
                                    description = '$description'");
        
        $row = mysqli_fetch_array($this->query);
        
        return $row['0'] > 0 ? true : false;
    }
}

?>
