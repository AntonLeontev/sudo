<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show(Employee $employee)
    {
        return view('employee', compact('employee'));
    }

    public function card(Employee $employee)
    {
        $content = view('files.vcard', compact('employee'))->render();

        return response($content)
            ->withHeaders([
                'Content-Type' => 'text/plain',
                'Cache-Control' => 'no-store, no-cache',
                'Content-Disposition' => "attachment; filename={$employee->slug}.vcf",
            ]);

    }
}
