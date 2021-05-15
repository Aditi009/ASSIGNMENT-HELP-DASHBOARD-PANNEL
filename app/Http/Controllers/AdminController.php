<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\FreeAssistance;
use App\Models\Freelancer;
use App\Models\Freelancerquote;
use App\Models\Uploadassignment;

use Illuminate\Http\Request;
use Illuminate\View\View;



class AdminController extends Controller
{
    //
    public function NewAssignment()

    {

        $assignment=Assignment::all();
        foreach ($assignment as $key)
        {
           if($key->total_quotes>0 && $key->paid_amount==0)
           {


               $assig=Assignment::where('id',$key->id)->first();
               $assig->table_status="NewNotPaid";

               $assig->update();

           }
           elseif($key->total_quotes>0 && $key->paid_amount==(int)($key->total_quotes)/2)
        {
            $assig=Assignment::where('id',$key->id)->first();
            $assig->table_status="ppfa";

            $assig->update();

        }
        else{
              $assig=Assignment::where('id',$key->id)->first();
            $assig->table_status="NewAssignment";

            $assig->update();
        }

        }
        return view('admin.newassignment',compact('assignment'));
    }
    public function NewnotPaid()
    {   $assignment=Assignment::all();
        $free=FreeAssistance::all();
        foreach ($assignment as $key)
        {
           if($key->total_quotes>0 && $key->paid_amount==0)
           {


               $assig=Assignment::where('id',$key->id)->first();
               $assig->table_status="NewNotPaid";

               $assig->update();

           }
           elseif($key->total_quotes>0 && $key->paid_amount==(int)($key->total_quotes)/2)
        {
            $assig=Assignment::where('id',$key->id)->first();
            $assig->table_status="ppfa";

            $assig->update();

        }
        else{
              $assig=Assignment::where('id',$key->id)->first();
            $assig->table_status="NewAssignment";

            $assig->update();
        }

        }


        return view('admin.newnotpaid',compact('assignment'));
    }

    public function Ppfa()
    {    $assignment=Assignment::all();
        foreach ($assignment as $key)
        {
           if($key->total_quotes>0 && $key->paid_amount==0)
           {


               $assig=Assignment::where('id',$key->id)->first();
               $assig->table_status="NewNotPaid";

               $assig->update();

           }
           elseif($key->total_quotes>0 && $key->paid_amount==(int)($key->total_quotes)/2)
        {
            $assig=Assignment::where('id',$key->id)->first();
            $assig->table_status="ppfa";

            $assig->update();

        }
        else{
              $assig=Assignment::where('id',$key->id)->first();
            $assig->table_status="NewAssignment";

            $assig->update();
        }

        }
        return view('admin.ppfa',compact('assignment'));
    }

    public function DoneWithProof()
    {   $upload=Uploadassignment::all();
        return view('admin.done_with_proof_reading',compact('upload'));
    }
    public function DoneWithoutProof()
    {  $upload=Uploadassignment::all();
        return view('admin.done_without_proof_reading',compact('upload'));
    }
    public function StudentreWork()

    {  $assignment=Assignment::all();
        foreach ($assignment as $key ) {
            # code...
            if ($key->rework==1) {
                $key->table_status="StudentRework";
                $key->update();
                # code...
            }
        }
        return view('admin.student_rework',compact('assignment'));
    }
    public function ExpiredAssignment()
    {
        $assignment=Assignment::all();
        $ldate = date('Y-m-d H:i:s');
        foreach ($assignment as $key) {

        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $key->dead_line);
        $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i',$ldate);
        $diff_in_days = $to->diffInDays($from);
        $key->dd=$diff_in_days;
        $key->update();



       }
        return view('admin.expired_assignment',compact('assignment'));
    }
    public function AddFreelancer()

    {   $freelancer=Freelancer::all();
        return view('admin.addfreelancer',compact('freelancer'));
    }
}
