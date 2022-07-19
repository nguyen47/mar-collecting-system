<?php

namespace App\Exports;

use App\Models\RegisterProgram;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProgramExport implements FromCollection
{
    public function collection()
    {
        return RegisterProgram::all();
    }
}
