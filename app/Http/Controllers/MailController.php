<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyEmail;
use Mail;
use App\Models\Employee;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        
        $employees = Employee::whereMonth('join_date', '=', date('m'))->whereDay('join_date', '=', date('d'))->get();  

        $i = 0;
        foreach($employees as $employee)
            {
                Mail::to($employee->email)->send(new MyEmail($employee->ar_name));
                
            }
          
        dd("Email is sent successfully.",$employees);
        
    }
}
