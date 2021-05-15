<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Freelancer;
use App\Models\Freelancerquote;
use App\Models\Subject;
use App\Models\Uploadassignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    //
    public function addfreelancer(Request $request)
    {
        $freelancer=new Freelancer();
        $freelancer->name=$request->name;
        $freelancer->email=$request->email;
        $freelancer->subject=$request->subject;
        $freelancer->save();
        return redirect()->back()->with('message', 'Successfully Added');


    }
    public function del(Request $request)
    {
            $upload=Uploadassignment::find($request->id);
            $upload->delete();
            return redirect()->back()->with('message', 'Deleted Added');


    }
    public function delsub(Request $request)
    {
            $upload=Subject::find($request->id);
            $upload->delete();
            return redirect()->back()->with('message', 'Deleted Added');


    }
    public function addsubject()
    {

        $sub=Subject::all();
        return view('admin.addsubject' ,compact('sub'));
    }

    public function uploadsubject(Request $req)
    {
        $subject=New Subject();
        $subject->subject=$req->Subjectname;
        $subject->save();
        return redirect()->back()->with('message', 'Added Succesfully');
    }
    public function proof(Request $req)
    {
       $upload=Uploadassignment::find($req->id);
       $upload->status="done_with_proof";
       $upload->update();
       return redirect()->back()->with('message', 'Verified');

    }





    public function edit(Request $request)
    {
            $freelancer=Freelancer::find($request->id);
            $freelancer->delete();
            return redirect()->back()->with('message', 'Deleted Added');


    }
    public function updateQuotes(Request $request)
    {
        $assignmen=Assignment::where('id',$request->id)->first();


        $assignmen->word_count=$request->wordCount;
        $assignmen->ppt=$request->ppt;
        $assignmen->tech_effort=$request->techeffort;
        $assignmen->rate=$request->rate;
        $assignmen->quote_remark=$request->quoteremark;
        $assignmen->total_quotes=$request->totalquotes;
        $assignmen->currency=$request->currency;
        $q= $assignmen->update();








       if($q){
        return redirect()->back()->with('changesmessage', 'Updated Successfully');
       }else{
        return redirect()->back()->with('changesmessage', 'Not Updated Successfully');
       }


    }


    public function freelancerquotes(Request $req){
      $freelancerquotes=new Freelancerquote();
      $sub=$req->subject;
      $freelancer=Freelancer::where('subject',"hindi")->get();
      $count=count($freelancer);



      foreach ($freelancer as $key) {


        $freelancerquotes->freelancer_id=$key["id"];
         $freelancerquotes->subject=$req->subject;
        $freelancerquotes->ppt=$req->ppt;
        $freelancerquotes->description=$req->desc;
         $freelancerquotes->due_date=$req->duedate;
        $q=$freelancerquotes->save();

         }

         if($q){
       return redirect()->back()->with('message', 'Freelancer Quotes Successfully');
         }else{
      return redirect()->back()->with('message', 'Sorry Some Server Problem');
         }



    }
    public function AllocatedFreelancer()
    {   //
     /*   $assignmen=Assignment::all();
        $a=[];
        foreach ($assignmen as $key)
         {

         array_push($a,$key->subjects);

        }
        $free=[];
        foreach ($a as $key)
        {
            $freelancer=Freelancer::where('subject',$key)->first();
            array_push($free,$freelancer);

         }

*/


        return view('admin.allocatedfreelancer');
    }

     public function viewAssignment()
     {
         return view('admin.viewAssignment');
     }
     public function uploadAssignment()
     {  $upload=Uploadassignment::all();

        return view('admin.uploadAssignment',compact('upload'));
     }
     public function uploadassignments(Request $req)
     {
         $upload=New Uploadassignment();
         if($files=$req->file('files')){
            $name=$files->getClientOriginalName();
            $files->move('files',$name);
            $upload->assignment_file=$name;
            }
         $upload->assignment_name=$req->Assignmentname;
         $upload->user_detail=$req->user_detail;
         $upload->subject=$req->subject;
         $upload->completion_date=$req->completedate;
         $upload->paid_amount=$req->paid_amount;
         $upload->Subject_Description=$req->desc;

        $q=$upload->save();
        if($q){
            return redirect()->back()->with('message', 'Upload Successfully');
           }else{
            return redirect()->back()->with('message', 'Not Upload Successfully');
           }
     }
     public function order()
     {
         $upload=Uploadassignment::all();
         return view('admin.order',compact('upload'));
     }
     public function ordernotpaid()
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


        return view('admin.ordernotpaid',compact('assignment'));

    }



}
