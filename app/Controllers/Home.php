<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Employemodel;


class Home extends BaseController
{
 
    public function index()
{
    $employee = new Employemodel();
    $data['employee'] = $employee->findAll();
    return view('homeview', $data);
  
}

public function addEmployee(){
    return view('addEmployee');
}
    
public function store(){
    $employee = new Employemodel();
    $data =[
        'emp_name' => $this->request->getPost('emp_name'),
        'emp_email' => $this->request->getPost('emp_email'),
        'emp_salary' => $this->request->getPost('emp_salary'),
        'designation' => $this->request->getPost('designation'),
        'city' => $this->request->getPost('city')
    ];
    $employee->save($data);
    return redirect()->to(base_url())->with('status', 'Employee added successfully');
}

   public function update($id){
    $employee = new Employemodel();
    $data['empData'] = $employee ->find($id);
    return view('updateEmployee', $data);
   }

   public function updatedata($id){
    $employee = new Employemodel();
    $employee ->find($id);
    $data =[
        'emp_name' => $this->request->getPost('emp_name'),
        'emp_email' => $this->request->getPost('emp_email'),
        'emp_salary' => $this->request->getPost('emp_salary'),
        'designation' => $this->request->getPost('designation'),
        'city' => $this->request->getPost('city')
    ];
    $employee->update($id, $data);
    return redirect()->to(base_url())->with('status', 'Employee Updated successfully');
   }

   public function delete($id){
    $employee = new Employemodel();
    $employee->delete($id);
    return redirect()->to(base_url())->with('status', 'employee deleted succesfully');
   }
}
