<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use Input;
use Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactStaff;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
       
    }



    public function store(Request $request)
    {
        $formData = $request->all();



        $adminMail = 'ebuka4u96@gmail.com';
        $contactname = $formData['name'];
        $contactEmail = $formData['email'];
        $contactmessage = $formData['message'];


   Mail::to($adminMail)->send(new contactStaff($contactname, $contactmessage, $contactEmail));
       


    if (Mail::failures()) {


        return response()->json(['status' => 0, 'message' => "Email Failed"], 200);


            }else {

            return response()->json(['status' => 1, 'message' => "Email sent Successfully"], 200);
        }
    }



    public function update(Request $request, $id)
    {

        $formdata = $request->all();

        // echo"<pre>image";print_r($formdata['name']); exit;

 
        $CategoryMethod = CategoryMethod::where([['id', '<>', $id]]);
        $CategoryMethodCount = $CategoryMethod->where('id', $id)->count();
        if ($CategoryMethodCount == 0) {
            $formdata = [

                'name' => $formdata['name'],

                'description' => $formdata['description'],
          
                'status' => $formdata['status'],

            ];
            $CategoryMethod = CategoryMethod::where('id', $id)->update($formdata);

            return response::json(['status' => 1, 'message' => "Category Updated Successfully.."], 200);
        } else {
            return response::json(['status' => 0, 'message' => "Category position is already exists.."], 200);
        }
    }


}
