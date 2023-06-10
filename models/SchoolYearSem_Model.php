<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SchoolYearSem
 *
 * @author ronversa09
 */
class SchoolYearSem_Model extends Model {

    private $query;

    public function __construct() {
        parent::__construct();
        $this->connectdb;

        $this->query = "";
    }

    public function insert($school_year) {
        mysqli_query($this->connectdb, "INSERT INTO  `socs`.`schoolyearsem` (`SY_SEM_ID` ,`School_Year` ,`Semester`)
                    VALUES 
                    (NULL ,  '$school_year',  'First'),
                    (NULL ,  '$school_year',  'Second'),
                    (NULL ,  '$school_year',  'Summer')");
    }

    public function getSchool_Year() {
        $arrayTemp = array();
        $this->query = mysqli_query($this->connectdb, "SELECT School_Year from schoolyearsem group by School_Year");

        while ($row = mysqli_fetch_array($this->query)) {
            array_push($arrayTemp, $row['School_Year']);
        }

        return $arrayTemp;
    }

    public function getSchool_Year_by_id($id) {
        $this->query = mysqli_query($this->connectdb, "SELECT School_Year FROM schoolyearsem WHERE SY_SEM_ID='$id'");

        $row = mysqli_fetch_array($this->query);

        return $row['0'];
    }
    
    public function getSem_by_id($id){
        $this->query = mysqli_query($this->connectdb, "SELECT Semester FROM schoolyearsem WHERE SY_SEM_ID='$id'");
        
        $row = mysqli_fetch_array($this->query);
        
        return $row['0'];
    }

    public function getSy_ID($sy, $sem) {
        $this->query = mysqli_query($this->connectdb, "select SY_SEM_ID from schoolyearsem where School_Year = '$sy' AND Semester = '$sem'");
        $row = mysqli_fetch_array($this->query);

        return $row['SY_SEM_ID'];
    }

    public function getCurSemester() {
        $row = explode("-", date("Y-m-d"));
        $curMonth = $row[1];

        if ($curMonth >= 1 && $curMonth <= 3) {
            return "Second";
        } else if ($curMonth >= 6 && $curMonth <= 10) {
            return "First";
        } else if ($curMonth >= 11 && $curMonth <= 12) {
            return "Second";
        } else {
            return "Summer";
        }
    }

    public function getCurSchool_Year() {
        $row = explode("-", date("Y-m-d"));
        $curYear = $row[0];
        $curMonth = $row[1];

        if ($this->getCurSemester() == "First") {
            return $curYear . "-" . ($curYear + 1);
        } elseif ($this->getCurSemester() == "Second") {
            if ($curMonth >= 11 && $curMonth <= 12) {
                return $curYear . "-" . ($curYear + 1);
            } else {
                return ($curYear - 1) . "-" . $curYear;
            }
        } else {
            return ($curYear - 1) . "-" . $curYear;
        }
    }

    /* =========== for registration purposes ================= */

    public function getListOfYear() {
        $array_temp = array();

        $temp_year = $this->getSchool_Year();
        $first = $temp_year[0];
        $last = $temp_year[count($temp_year) - 1];

        $first = explode("-", $first);
        $last = explode("-", $last);

        $first = $first[0];
        $last = $last[1];

        for ($index = $first; $index < $last; $index++) {
            array_push($array_temp, $index);
        }

        return $array_temp;
    }

    public function getLastAddedSchoolYearInDatabase() {
        $q = "SELECT * FROM `schoolyearsem` order by School_Year desc, Semester desc limit 0,1";
        $this->query = mysqli_query($this->connectdb, $q);
        $row = mysqli_fetch_array($this->query);
        return $row;
    }

    public function insertSchoolYear($school_year, $sem) {
        if (!$this->isSYSemExists($school_year, $sem)) {
            mysqli_query($this->connectdb, "INSERT INTO  `socs`.`schoolyearsem` (`School_Year` ,`Semester`)
                        VALUES 
                        ('$school_year',  '$sem')");
            //echo "Added: $school_year $sem </br>";
        }
    }

    public function isSYSemExists($school_year, $sem) {
        $this->query = mysqli_query($this->connectdb, "Select * from schoolyearsem where School_Year='$school_year' and Semester='$sem'");
        return 0 < mysqli_num_rows($this->query);
    }

}

?>
