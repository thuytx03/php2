<?php

namespace App\Controllers;

use App\Models\SalaryModel;
use App\Models\StaffModel;

class SalaryController extends BaseController
{
    public $salary;
    public $staff;

    public function __construct()
    {
        $this->salary = new SalaryModel();
        $this->staff = new StaffModel();
        checkAuth();

    }
    public function listSalary()
    {
        $getAllSalarys = $this->salary->getAllSalary();
        return $this->render('salary.index', compact('getAllSalarys'));
    }
    public function deleteSalary($id)
    {
        $this->salary->deleteSalary($id);
        SalaryModel::resetId("salary");
        redirect("success", "Xoá tính lương", "listSalary");
    }
    public function addSalary()
    {
        $staffs = $this->staff->getAllStaff();
        return $this->render('salary.add', compact('staffs'));
    }
    public function saveAddSalary()
    {
        if (isset($_POST['add_salary'])) {
            $staff_id = $_POST['staff_id'];
            $basic_salary = $_POST['basic_salary'];
            $work_day = $_POST['work_day'];
            $bonus = $_POST['bonus'];
            $allowance = $_POST['allowance'];
            $vat = $_POST['vat'];
            $error = [];
            if (empty($staff_id)) {
                $error[] = " Không được để trống nhân viên";
            }
            if (empty($basic_salary)) {
                $error[] = " Không được để trống lương cơ bản";
            }
            if (empty($work_day)) {
                $error[] = " Không được để trống số ngày công";
            }
            if (empty($bonus)) {
                $error[] = " Không được để trống thưởng";
            }
            if (empty($allowance)) {
                $error[] = " Không được để trống phụ cấp";
            }
            if (empty($vat)) {
                $error[] = " Không được để trống VAT";
            }
            if (count($error) > 0) {
                redirect("errors", $error, "addSalary");
            } else {
                $total_salary = (($basic_salary * $work_day) + $bonus + $allowance) / $vat;
                $this->salary->insertSalary($staff_id, $basic_salary, $work_day, $bonus, $allowance, $vat, $total_salary);
                redirect('success', "Tính lương thành công", "listSalary");
            }
        }
    }
    public function updateSalary()
    {
        $id = $_GET['id'];
        $staffs = $this->staff->getAllStaff();
        $getOneSalary = $this->salary->getOneSalary($id);
        return $this->render("salary.update", compact('getOneSalary', 'staffs'));
    }
    public function saveUpdateSalary()
    {
        if (isset($_POST['update_salary'])) {
            $id = $_POST['id'];
            $staff_id = $_POST['staff_id'];
            $basic_salary = $_POST['basic_salary'];
            $work_day = $_POST['work_day'];
            $bonus = $_POST['bonus'];
            $allowance = $_POST['allowance'];
            $vat = $_POST['vat'];
            $error = [];
            if (empty($staff_id)) {
                $error[] = " Không được để trống nhân viên";
            }
            if (empty($basic_salary)) {
                $error[] = " Không được để trống lương cơ bản";
            }
            if (empty($work_day)) {
                $error[] = " Không được để trống số ngày công";
            }
            if (empty($bonus)) {
                $error[] = " Không được để trống thưởng";
            }
            if (empty($allowance)) {
                $error[] = " Không được để trống phụ cấp";
            }
            if (empty($vat)) {
                $error[] = " Không được để trống VAT";
            }
            if (count($error) > 0) {
                redirect("errors", $error, "updateSalary&id=" . $id);
            } else {
                $total_salary = (($basic_salary * $work_day) + $bonus + $allowance) / $vat;
                $this->salary->updateSalary($id, $staff_id, $basic_salary, $work_day, $bonus, $allowance, $vat, $total_salary);
                redirect('success', " Cập nhật lương ", "listSalary");
            }
        }
    }
}
