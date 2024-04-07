<?php

namespace App\Models;

use CodeIgniter\Model;

class Employemodel extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'emp_name',
        'emp_email',
        'emp_salary',
        'designation',
        'city'
    ];
}