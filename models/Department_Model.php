<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Department_Model
 *
 * @author ronversa09
 */
class Department_Model extends Model{
    private $query;
    private $itemsPerPage = 30;
    private $filter_ID;
    private $filter_Name;
    private $filter_Desc;
    
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
    
    /*-----------------------------------------------*/
    
    public function filter($Tdept_name ,$Tpage){
        $this->query = mysqli_query($this->connectdb,"select * from departments
                                    where Department_Name like '%$Tdept_name%' order by Department_Name 
                                    LIMIT " . (($Tpage - 1) * $this->itemsPerPage) . ", " . $this->itemsPerPage);
        
        $this->filter_ID = array();
        $this->filter_Name = array();
        $this->filter_Desc = array(); 
        while($row = mysqli_fetch_array($this->query)){
            array_push($this->filter_ID, $row['0']);
            array_push($this->filter_Name, $row['1']);
            array_push($this->filter_Desc, $row['2']);
        }
    }
    
    
    /*-----------------------------------------------*/
    
//    public function filter_ID($Tdept_name, $Tpage){
//        $filter = array();
//        $this->query = mysqli_query($this->connectdb,"select Department_ID from departments
//                                    where Department_Name like '%$Tdept_name%' order by Department_Name 
//                                    LIMIT " . (($Tpage - 1) * $this->itemsPerPage) . ", " . $this->itemsPerPage);
//        
//        while($row = mysqli_fetch_array($this->query)){
//            array_push($filter, $row['Department_ID']);
//        }
//        
//        return $filter;
//    }
//    
//    public function filter_DeptName($Tdept_name, $Tpage){
//        $filter = array();
//        $this->query = mysqli_query($this->connectdb,"select Department_Name from departments
//                                    where Department_Name like '%$Tdept_name%' order by Department_Name  
//                                    LIMIT " . (($Tpage - 1) * $this->itemsPerPage) . ", " . $this->itemsPerPage);
//        
//        while($row = mysqli_fetch_array($this->query)){
//            array_push($filter, $row['Department_Name']);
//        }
//        
//        return $filter;
//    }
//    
    /*-----------------------------------------------*/
    
    public function getQueryPageSize($searchName) {
        $this->query = mysqli_query($this->connectdb,"select Department_Name from departments 
                        where Department_Name like '%$searchName%'");
        
        return mysqli_num_rows($this->query) / $this->itemsPerPage;
    }
    
    public function getListOfDepartments(){
        $array_temp = array();
        $this->query = mysqli_query($this->connectdb,"select Department_Name from departments");
        
        while($row = mysqli_fetch_array($this->query)){
            array_push($array_temp, $row['0']);
        }
        
        return $array_temp;
    }
    
    public function getListOfDept_ID(){
        $array_temp = array();
        $this->query = mysqli_query($this->connectdb,"select Department_ID from departments");
        
        while($row = mysqli_fetch_array($this->query)){
            array_push($array_temp, $row['0']);
        }
        
        return $array_temp;
    }
    
    public function getListOfCourses($deptID){
        $filter = array();
        $this->query = mysqli_query($this->connectdb,"select courses.course_name from departments
                                    inner join courses on courses.department_id = departments.department_id
                                    where departments.department_id = '$deptID'");
        
        while($row = mysqli_fetch_array($this->query)){
            array_push($filter, $row['0']);
        }
        
        return $filter;
    }
    
    
    public function deleteSignatory($key){
        $delete = mysqli_query($this->connectdb,"delete from departments where Department_ID = '$key'");
        if(!$delete){return "false";}
    }
    
    public function insert($dept_name, $description, $dept_logo){
        mysqli_query($this->connectdb,"INSERT INTO `socs`.`departments` (`Department_ID`, `Department_Name`, `Description`, `Department_Logo`) 
                    VALUES (NULL, '$dept_name', '$description', '$dept_logo');");
    }
    
    public function update($key, $newDeptName, $newDeptDesc, $newDept_Logo){
        mysqli_query($this->connectdb,"UPDATE `socs`.`departments` SET `Department_Name` = '$newDeptName',
                    `Description` = '$newDeptDesc', `Department_Logo` = '$newDept_Logo' WHERE `departments`.`Department_ID` ='$key'");
    }
    
    public function getDept_Name($key){
        $this->query = mysqli_query($this->connectdb,"select Department_Name from departments where Department_ID = '$key'");
        $row = mysqli_fetch_array($this->query);
        
        return $row['Department_Name'];
    }
    
    public function getDept_Desc($key){
        $this->query = mysqli_query($this->connectdb,"select Description from departments where Department_ID = '$key'");
        $row = mysqli_fetch_array($this->query);
        
        return $row['Description'];
    }
    
    public function getDescription($dept_name){
        $this->query = mysqli_query($this->connectdb,"select Description from departments where Department_Name = '$dept_name'");
        $row = mysqli_fetch_array($this->query);
        
        return $row['Description'];
    }
    
    public function get_logo($id){
        $this->query = mysqli_query($this->connectdb,"SELECT Department_Logo FROM departments WHERE Department_ID=$id");
        $row = mysqli_fetch_array($this->query);
        
        return $row[0];
    }




    /*------- for testing existing name --------*/
    
    public function isExist($dept_name, $description){
        $this->query = mysqli_query($this->connectdb,"select count(Department_Name) from departments where Department_Name = '$dept_name' OR 
                                    description = '$description'");
        
        $row = mysqli_fetch_array($this->query);
        
        return $row['0'] > 0 ? true : false;
    }
}

?>
