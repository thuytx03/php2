<?php

namespace App\Models;

class SalaryModel extends BaseModel
{
    protected $table = "salary";

    public function getAllSalary()
    {
        $sql = "SELECT sa.*, st.full_name as `staff_name` FROM salary sa inner join staffs st on st.id=sa.staff_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function getOneSalary($id){
        $sql="select * from $this->table where id= $id ";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    // public function insertSalary($id,$staff_id,$basic_salary,$work_day,$bonus,$allowance,$vat,$total_salary){
    //     $sql="insert into $this->table values(?,?,?,?,?,?,?,?)";
    //     $this->setQuery($sql);
    //     return $this->execute([$id,$staff_id,$basic_salary,$work_day,$bonus,$allowance,$vat,$total_salary]);
    // }
    public function insertSalary($staff_id,$basic_salary,$work_day,$bonus,$allowance,$vat,$total_salary){
        $sql="insert into salary (staff_id,basic_salary,work_day,bonus,allowance,vat,total_salary) 
        values('$staff_id','$basic_salary','$work_day','$bonus','$allowance','$vat','$total_salary')";
        $this->getData($sql,false);
    }
    public function deleteSalary($id){
        $sql="delete from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
    public function updateSalary($id,$staff_id,$basic_salary,$work_day,$bonus,$allowance,$vat,$total_salary){
       
        $sql = "update salary set 
        basic_salary='$basic_salary',
        work_day='$work_day',
        bonus='$bonus',
        allowance='$allowance',
        vat='$vat',
        total_salary='$total_salary',
        staff_id='$staff_id'

            where id='$id'";
        $this->getData($sql, false);
    }
}
