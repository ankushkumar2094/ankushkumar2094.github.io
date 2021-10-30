<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;

class PDFmaker extends Controller
{
    public function PrintUsers()
    {
    	$users = User::all()->where('status','=',1);
    	//dd($user);
    	$data = ['users' => $users];	
    	
    	$pdf = PDF::loadView('pdf.UserRecords', $data);
		return $pdf->download('User Records.pdf');
    }


}
