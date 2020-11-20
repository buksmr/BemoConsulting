<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Ticket;
use App\Heritagecattypetables;
use App\Heritagecompaintdetails;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Description;
use App\Department;
use App\Timesheet;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\ClientEmail;
use App\Mail\SupportStaff;
use App\Mail\DistributionEmail;
use App\User;
use App\Chat;
use App\Newproject;
use App\Bank;
use App\Activity;
use App\Exceptions\Handler;
use View;
use Storage;
use Validator;




class TicketController extends Controller
{

          public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function index(){

     
 
      // $dynamic = Newproject::where('bank_name', '=', $bank_name)->get();

   
     
     }

   
     public function provinces(){
        $provinces = DB::table('categories') 
        ->get();
               $ticket = Ticket::all();
       $description = Description::all();
       $department= Department::all();
       $banks = Bank::all();
       
        return view('ticket', compact('provinces', 'ticket', 'description', 'department', 'banks'));  
    }


    public function regencies(Request $request){
      $provinces_id = $request->input('category_id');
      $regencies = Description::where('category_id', '=', $provinces_id)->get();
      return response()->json($regencies);
    }

      public function dynamic(Request $request){
      $description_id = $request->input('description_id');
      $dynamic = Description::where('id', '=', $description_id)->get();

      foreach ($dynamic as $key) {
          # code...
      }

        $ff = explode(',', $key->agent_id);

  $dynamic = User::whereIn('id', $ff)->get();


      return response()->json($dynamic);
    }

   public function commit(){

     
      $bank_name = Input::get('staffname');
      // $dynamic = Newproject::where('bank_name', '=', $bank_name)->get();

      return response()->json($bank_name);
    }


    
    

   public function showtickets()
    {
// dd(Auth::user()->getRoleNames()[0]);
        $ticket = Ticket::all();

        // if (Auth::user()->getRoleNames()[0]!='Admin'){

        //      $ticket = Ticket::where('logged_by', Auth::user()->UserName)->get();
        // }

        return view('showtickets',compact('ticket'));



    }



  public function sendticket(Request $request)


    {

              // Recombine arrays, subfunctions
        function reArrayFiles( $file_post ) {
    
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

    
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
    
            return $file_ary;
        }


                $validation = Validator::make($request->all(),[
            'customer_name'=>'required',
            'cemail'=>'required',
            'category_id'=>'required',
            'description_id'=>'required',
            'status'=>'required',
            'urgency'=>'required',
            'subject'=>'required',
            'customer_phone_mumber'=>'required',
            'subject'=>'required',
            'editor1'=>'required',
            'user_id'=>'required',
            'account_number'=>'required',
       

    
           ]);

        if ($request->file('filesToUpload')){

             $imgFiles = $_FILES ['filesToUpload'];
        }

     
      //dd($request->file('filesToUpload'));

  // dd($imgFiles);



         // corresponds to the input name = "filesToUpload []" in the front-end page

$savedFiles = array();
        $uploadedFiles = array(); // return value

        if(!empty($imgFiles))
        {
            $img_desc = reArrayFiles( $imgFiles );
             // dd($img_desc);
            $destinationPath =public_path().'/images/'; //public folder under the build storage/uploads folder


            foreach( $img_desc as $img )
            {


        $filename = date('YmdHis',time()).mt_rand().'.'.pathinfo( $img['name'], PATHINFO_EXTENSION );
                $savedFile = $destinationPath.$filename;
                  array_push( $savedFiles, $filename );

                move_uploaded_file($img['tmp_name'],  $savedFile);
                 //($savedFile);
                $img['savedFile'] = $savedFile ;

                array_push( $uploadedFiles, $img );
            }
        }

     $upload = implode(',', $savedFiles);

// dd($savedFiles);







                 $error_array = array();

                 $success = '';
      

            if ($validation->fails()){
                foreach($validation->messages()->getMessages() as $field_name => $messages)
             
                
                {
                    $error_array[] = $messages;
                }
                
             } 

             else if ( $request->input('type') !== 'update'){


$user_id = implode(',', $request->input('user_id'));

// dd();

$date = date('Y-m-d H:i',time());

$description = Description::find($request->input('description_id'));
 $description = $description->name;

$type = Category::find($request->input('category_id'));
 $type= $type->name;







         $ticket = new Ticket([


            'customer_name'=> $request->input('customer_name'),
            'cemail'=> $request->input('cemail'),
            'description_id' => $request->input('description_id'),
            'category_id' => $request->input('category_id'), 
            'status' => $request->input('status'),  
            'urgency' => $request->input('urgency'),
            'subject' => $request->input('subject'),
            'editor1'=>$request->input('editor1'),
            'logged_by'=>$request->input('logged_by'),
            'account_number'=>$request->input('account_number'),
            'upload'=>$upload,
            'date'=>$date,        
            'user_id'=>$user_id,
			'customer_number' => $request->input('customer_phone_mumber'), 
            'gender' => $request->input('gender'), 
            'date_of_transaction' => $request->input('date_of_transaction'),  
            'Last_four_atm_digits' => $request->input('Last_four_atm_digits'),
            'pan_number' => $request->input('pan_number'),
            'amount'=>$request->input('amount'),
            'bank_atm_used'=>$request->input('bank_atm_used'),
            'ticket_id'=>date('Ymd',time()).'-'.rand(0000,1111).strtoupper(str_random(2)),


    ]);
         //dd($ticket->date);
     
           $ticket->save();

         // dd($ticket->cemail);


              $sendmails = User::wherein('id', $request->input('user_id'))->get();
              $success = $ticket->ticket_id;

            

   $ty =  $request->input('customer_phone_mumber');
 $smsmessageclient="Hi ".$request->input('customer_name')." your complaint is being attended to. ID:".$ticket->ticket_id;

 $ENCODEDMESSAGECLIENT=urlencode("$smsmessageclient");
     

$apiclient = "http://104.199.51.72:8800/?User=npf&Password=npf123&PhoneNumber=$ty&Text=$ENCODEDMESSAGECLIENT&Sender=NPFMFB";

 $smsresponse=file_get_contents($apiclient);

    
           
      foreach ($sendmails as $sendmail ) {
         $staffname = $sendmail->UserName;
                      Mail::to($sendmail->email)->send(new SupportStaff($ticket, $staffname, $type, $description));
         
         }
           
                    Mail::to($ticket->cemail)->queue(new ClientEmail($ticket, $type, $description));
					
					Mail::to('npfcrm@npfmicrofinancebank.com')->queue(new DistributionEmail($ticket, $staffname, $type, $description));
         
     

        }
        else{




            $update = Ticket::find($request->input('bankid'));
             $update->bank_name  = $request->input('bank_name');
             $update->Name_of_cperson = $request->input('Name_of_cperson');
             $update->bank_email  = $request->input('bank_email');
             $update->bank_code  = $request->input('bank_code');
             $update->bank_Phone_number  = $request->input('bank_Phone_number');
             $update->bank_address  = $request->input('bank_address');            
             $update->save();




        };

        
                $output = array('error' => $error_array, 'success' =>$success);




echo json_encode($output);






            
    

    }

      public function viewtickets($id, $ticket_id, Request $request)
    {





        

         if ($request->notification == 'true'){

                $update = Ticket::where('ticket_id', $ticket_id)->update(array('action' => 'seen'));


         }




    $activity = Activity::where('ticket_id', $ticket_id)->orderBy('id', 'DESC')->get();


  





$ticket = Ticket::find($id);



$description = explode(',', $ticket->description->agent_id);




$description = User::wherein('id', $description)->get();




$upload = explode(',', $ticket->upload);


$user = explode(',', $ticket->user_id);

$user = User::wherein('id', $user)->get();




      
        return view('viewtickets',compact('ticket', 'user', 'upload', 'ticket_id', 'activity', 'description'));
 
    

    }

   public function  recent_activity(Request $request){

            // Recombine arrays, subfunctions
        function reArrayFiles( $file_post ) {
    
            $file_ary = array();
            $file_count = count($file_post['name']);
            $file_keys = array_keys($file_post);

    
            for ($i=0; $i<$file_count; $i++) {
                foreach ($file_keys as $key) {
                    $file_ary[$i][$key] = $file_post[$key][$i];
                }
            }
    
            return $file_ary;
        }


                $validation = Validator::make($request->all(),[
            'comment'=>'required',
  
       

    
           ]);

        if ($request->file('files')){

             $imgFiles = $_FILES ['files'];
        }

     
      //dd($request->file('filesToUpload'));

  // dd($imgFiles);



         // corresponds to the input name = "filesToUpload []" in the front-end page

$savedFiles = array();
        $uploadedFiles = array(); // return value

        if(!empty($imgFiles))
        {
            $img_desc = reArrayFiles( $imgFiles );
             // dd($img_desc);
            $destinationPath =public_path().'/images/'; //public folder under the build storage/uploads folder


            foreach( $img_desc as $img )
            {


        $filename = date('YmdHis',time()).mt_rand().'.'.pathinfo( $img['name'], PATHINFO_EXTENSION );
                $savedFile = $destinationPath.$filename;
                  array_push( $savedFiles, $filename );

                move_uploaded_file($img['tmp_name'],  $savedFile);
                 //($savedFile);
                $img['savedFile'] = $savedFile ;

                array_push( $uploadedFiles, $img );
            }
        }

     $upload = implode(',', $savedFiles);

// dd($savedFiles);







                 $error_array = array();
      

            if ($validation->fails()){
                foreach($validation->messages()->getMessages() as $field_name => $messages)
             
                
                {
                    $error_array[] = $messages;
                }
                
             } 

            else{



         $activity = new Activity([


            'comment'=> $request->input('comment'),
            'status'=> $request->input('status'),
            'files' => $upload,
             'user_id' => $request->input('user_id'),
            'ticket_id'=> $request->input('ticket_id'),
            

                ]);

         // dd($activity)

              // $activity->save();

              $ticket_id = $request->input('ticket_id');

 //$update = Ticket::where('ticket_id', $ticket_id)->update(array('status' => $request->input('status')));

         if($request->input('status') == 'Closed'){
             
              $send_notification = Ticket::where('ticket_id', $ticket_id)->first();

             
              
              
                 $ty =  urlencode("$request->input($send_notification->customer_number)");
 $smsmessageclient="Hi ".$request->input($send_notification->customer_name)." your complaint is being attended to. ID:".$ticket_id;

 $ENCODEDMESSAGECLIENT=urlencode("$smsmessageclient");
     

 $apiclient = "http://104.199.51.72:8800/?User=npf&Password=npf123&PhoneNumber=$ty&Text=$ENCODEDMESSAGECLIENT&Sender=NPFMFB";

  //$smsresponse=file_get_contents($apiclient);
              
               $send_email = User::where('UserName', $send_notification->logged_by)->first();
               
              

              $description = Description::find($send_notification->description_id);
 $description = $description->name;

$type = Category::find($send_notification->category_id);
 $type= $type->name;
              
              Mail::to('send_email->email')->queue(new DistributionEmail($ticket_id, $send_notification->logged_by, $type, $description));

              
}





    }

                    $output = array('error' => $error_array);




echo json_encode($output);


   }




    public function  check_user_ticket(Request $request)


    {
          

                 $user_id = $request->input('user_id');
                $ticket_id = $request->input('ticket_id');


                 $error_array = array();

                if ($user_id==''){


                $error_array =  'no support staff was checked';


                } else{

                $user_id = implode(',', $request->input('user_id'));
                      
                  $update = Ticket::where('ticket_id', $ticket_id)->update(array('user_id' =>$user_id));
                    
                }




$output = array('error' => $error_array); 




echo json_encode($output);
       
         


    }

    public function delete_ticket(Request $request)


    {



 $delete = Ticket::find($request->input('id'));


$delete->delete();
              
}

  public function showtickets_resolved(Request $request){

            $ticket = Ticket::active()->get();



        // if (Auth::user()->getRoleNames()[0]!='Admin'){

        //      $ticket = Ticket::where('logged_by', Auth::user()->UserName)->active()->get();
        // }


        return view('showtickets_resolved',compact('ticket'));




  }
    public function showtickets_unresolved(Request $request){

            $ticket = Ticket::inactive()->get();

            
        if (Auth::user()->getRoleNames()[0]!='Admin'){

             $ticket = Ticket::where('logged_by', Auth::user()->UserName)->inactive()->get();
        }


        return view('showtickets_unresolved',compact('ticket'));




  }




    public function  assignticket(Request $request, $id)
    {
          

        $ticket= Ticket::find($id);
        $ticket->department_id = $request->get('department_id');

        if($ticket->department_id >0 ){

        $ticket->save();
          return redirect()->back()->with('success', 'Ticket Assigned');  

        } else{

            return redirect()->back()->with('error', 'Kindly Choose Staff Department'); 

        }
       
         


    }

      public function  createproject(Request $request)
    {
          

            $createproject = new Newproject([


            'bank_name' => $request->input('bank_name'),
            'project_manager' => $request->input('project_manager'),
            'project_code' => $request->input('project_code'),  
            'billable' => $request->input('billable'),
            'editor1'=>$request->input('editor1'),
        


        ]);


        
            if($createproject->save()){
                 
                

                return redirect()->back()->with("success", "Ticket created Successfully ");

            }

            else {
                return redirect()->back()->with("error", "Error creating Ticket.");
            }


    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
       
        $timesheet=Ticket::Where('ticket_id', $id)->get();

              $chat = Chat::Where('ticket_id', '=', $id)->get();

          



return view("myticket", compact('timesheet', 'chat', 'id', 'department')); 
    }




    public function chat(Request $request)



    {







       

$chat = new Chat([



             'chat' => $request->input('chat'),
            'username' => $request->input('username'),
            'ticket_id' => $request->input('ticket'),  
          




]);


            if($chat->save()){

                 echo "SS";

            }

           


          

}


    
    public function edit(Request $request, $id)
    {


      $view= $request->input('
        heet');
      $cc = $request->input('comment');

 



    

      

        

        $bank=Newproject::all();
        
       $timesheet=Timesheet::findorFail($id);
      


          if ($view =='view'){

            $disabled = 'disabled';


  return view('edit', compact('timesheet', 'id', 'bank', 'disabled'));

        }elseif ($view=='comment'){

            $timesheet->comment = $request->input('timesheet');

          echo     $request;


        }else{


             $disabled = '';

              return view('edit', compact('timesheet', 'id', 'bank', 'disabled'));
        }







       

 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



            $update = Timesheet::findorFail($id);



            $update->bankid = $request->input('bankid');
            $update->staffname = $request->input('staffname');
            $update->bank_task = $request->input('btask');
            $update->status = $request->input('status');
            $update->billable = $request->input('billable');
            $update->date = $request->input('date');
            $update->description = $request->input('editor1');
            $update->project_code =  $request->input('project_code');

            $update->save();
            

        
          return redirect('timesheet')->with('success', 'Data Updated');


 

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

    $destroy = Timesheet::findorFail($id);



        $destroy->delete();

          return redirect('timesheet')->with('success', 'Data Deleted');




    }
}
