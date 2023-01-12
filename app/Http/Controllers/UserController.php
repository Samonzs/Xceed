<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;
class UserController extends Controller
{

    public function show_pdf(Request $request){

        //get id
        $id = $request->input("id");

        $clientDetails = DB::table("clientDetails")->where("id","=",$id)->get()->first();
        if(!empty($clientDetails)){
            $clientDetails = get_object_vars($clientDetails);
        }else{
            $clientDetails  =[];
        }
        $clientSiteDetails = DB::table("clientSiteDetails")->where("id","=",$id)->get()->first();
        if(!empty($clientSiteDetails)){
            $clientSiteDetails = get_object_vars($clientSiteDetails);
        }else{
            $clientSiteDetails=[];
        }
        $TermsAndConditions = DB::table("TermsAndConditions")->where("id","=",$id)->get()->first();
        if(!empty($TermsAndConditions)){
            $TermsAndConditions = get_object_vars($TermsAndConditions);
        }else{
            $TermsAndConditions=[];
        }
        //generate pdf file
        $pdf = new \TCPDF();

        // info. of file
        $pdf->SetCreator('XCEED');
        $pdf->SetAuthor('XCEED');
        $pdf->SetTitle('XCEED');
        $pdf->SetSubject('XCEED');
        $pdf->SetKeywords('XCEED');

        $pdf->setHeaderFont(['stsongstdlight', '', '10']);
        $pdf->setFooterFont(['helvetica', '', '8']);
        
        $pdf->SetDefaultMonospacedFont('courier');
        
        $pdf->SetMargins(15, 15, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        // set subpage
        $pdf->SetAutoPageBreak(true, 25);
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);
        //Font senting
        $pdf->SetFont('stsongstdlight', '', 14);

       // $logo_path='https://xceedelectrical.com.au/wp-content/uploads/2020/05/Xceed-Electrical-Logo.png';
       // $logo_path='public/images/logo.jpg';

        if(!empty($clientDetails)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Details</h1></div>');
            $pdf->writeHTML('<p>First Name: '.$clientDetails['first name'].'</p>');
            $pdf->writeHTML('<p>Last Name: '.$clientDetails['last name'].'</p>');
            $pdf->writeHTML('<p>Client Email: '.$clientDetails['client email'].'</p>');
            $pdf->writeHTML('<p>Phone Number: '.$clientDetails['phone number'].'</p>');
            $pdf->writeHTML('<p>Date of Birth: '.$clientDetails['date'].'</p>');
            $pdf->writeHTML('<p>Company Name: '.$clientDetails['company name'].'</p>');
            $pdf->writeHTML('<p>ABN: '.$clientDetails['abn'].'</p>');
            $pdf->writeHTML('<p>Address Line: '.$clientDetails['address line'].'</p>');
            $pdf->writeHTML('<p>Suburb: '.$clientDetails['suburb'].'</p>');
            $pdf->writeHTML('<p>Postcode: '.$clientDetails['postcode'].'</p>');
            $pdf->writeHTML('<p>Created At: '.$clientDetails['created_at'].'</p>');
            $pdf->writeHTML('<p>Updated At: '.$clientDetails['updated_at'].'</p>');
        }
        if(!empty($clientSiteDetails)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Site Details</h1></div>');
            $pdf->writeHTML('<p>Job: '.$clientSiteDetails['job reference number'].'</p>');
            $pdf->writeHTML('<p>Order: '.$clientSiteDetails['order number'].'</p>');
            $pdf->writeHTML('<p>Site Name: '.$clientSiteDetails['site name'].'</p>');
            $pdf->writeHTML('<p>Site Address Line: '.$clientSiteDetails['site address line'].'</p>');
            $pdf->writeHTML('<p>Site Address State: '.$clientSiteDetails['site address state'].'</p>');
            $pdf->writeHTML('<p>Site Postcode: '.$clientSiteDetails['site postcode'].'</p>');
            $pdf->writeHTML('<p>Variation Item: '.$clientSiteDetails['variation item'].'</p>');
            $pdf->writeHTML('<p>Variation Item Price: '.$clientSiteDetails['variation item price'].'</p>');
            $pdf->writeHTML('<p>Variation Description: '.$clientSiteDetails['variation description'].'</p>');
            $pdf->writeHTML('<p>Total Cost: '.$clientSiteDetails['total cost'].'</p>');
            $pdf->writeHTML('<p>Variation Date Request: '.$clientSiteDetails['variation date request'].'</p>');
            $pdf->writeHTML('<p>Created At: '.$clientSiteDetails['created_at'].'</p>');
            $pdf->writeHTML('<p>Updated At: '.$clientSiteDetails['updated_at'].'</p>');
        }
        if(!empty($TermsAndConditions)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Site Details</h1></div>');
            $pdf->writeHTML('<p>Terms And Conditions: '.$TermsAndConditions['TermsAndConditions'].'</p>');
            // $pdf->writeHTML('<p>created_at: '.$TermsAndConditions['created_at'].'</p>');
            // $pdf->writeHTML('<p>updated_at: '.$TermsAndConditions['updated_at'].'</p>');
        }
        $danhao = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);

        //output PDF
//       $pdf =  $pdf->Output(base_path('resources/pdf')."/".date("Y-m-d")."/" .$danhao.'.pdf', 'F');//I输出、D下载、 F保存到服务器\
         $pdf->Output($danhao.'.pdf', 'I');//I- output、D- download、 F- save to server

    
    }

    //client list
    public function  confirmation(){

        $confirmation =DB::table("clientDetails")->get()->toArray();
        $client_list_data =[];
        foreach ($confirmation as $item){
            $client_list_data[] = get_object_vars($item);
        }

        return view("confirmation",['client_list_data'=>$client_list_data]);
    }
    //email contents
    public function client_show(Request $request){
        //get id
        $id = $request->input("id");

        $clientDetails = DB::table("clientDetails")->where("id","=",$id)->get()->first();
        if(!empty($clientDetails)){
            $clientDetails = get_object_vars($clientDetails);
        }else{
            $clientDetails  =[];
        }
        $clientSiteDetails = DB::table("clientSiteDetails")->where("id","=",$id)->get()->first();
        if(!empty($clientSiteDetails)){
            $clientSiteDetails = get_object_vars($clientSiteDetails);
        }else{
            $clientSiteDetails=[];
        }
        $TermsAndConditions = DB::table("TermsAndConditions")->where("id","=",$id)->get()->first();
        if(!empty($TermsAndConditions)){
            $TermsAndConditions = get_object_vars($TermsAndConditions);
        }else{
            $TermsAndConditions=[];
        }
        //generate pdf
        $pdf = new \TCPDF();
        // contents of padf file
        $pdf->SetCreator('XCEED');
        $pdf->SetAuthor('XCEED');
        $pdf->SetTitle('XCEED');
        $pdf->SetSubject('XCEED');
        $pdf->SetKeywords('XCEED');
        // font of header and footer
        $pdf->setHeaderFont(['stsongstdlight', '', '10']);
        $pdf->setFooterFont(['helvetica', '', '8']);
        
        $pdf->SetDefaultMonospacedFont('courier');
        // margins
        $pdf->SetMargins(15, 15, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        // page break
        $pdf->SetAutoPageBreak(true, 25);
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);
        
        $pdf->SetFont('stsongstdlight', '', 14);
        if(!empty($clientDetails)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Details</h1></div>');
            $pdf->writeHTML('<p>First Name: '.$clientDetails['first name'].'</p>');
            $pdf->writeHTML('<p>Last Name: '.$clientDetails['last name'].'</p>');
            $pdf->writeHTML('<p>Client Email: '.$clientDetails['client email'].'</p>');
            $pdf->writeHTML('<p>Phone Number: '.$clientDetails['phone number'].'</p>');
            $pdf->writeHTML('<p>Date of Birth: '.$clientDetails['date'].'</p>');
            $pdf->writeHTML('<p>Company Name: '.$clientDetails['company name'].'</p>');
            $pdf->writeHTML('<p>ABN: '.$clientDetails['abn'].'</p>');
            $pdf->writeHTML('<p>Address Line: '.$clientDetails['address line'].'</p>');
            $pdf->writeHTML('<p>Suburb: '.$clientDetails['suburb'].'</p>');
            $pdf->writeHTML('<p>Postcode: '.$clientDetails['postcode'].'</p>');
            $pdf->writeHTML('<p>Created At: '.$clientDetails['created_at'].'</p>');
            $pdf->writeHTML('<p>Updated At: '.$clientDetails['updated_at'].'</p>');
        }
        if(!empty($clientSiteDetails)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Site Details</h1></div>');
            $pdf->writeHTML('<p>Job: '.$clientSiteDetails['job reference number'].'</p>');
            $pdf->writeHTML('<p>Order: '.$clientSiteDetails['order number'].'</p>');
            $pdf->writeHTML('<p>Site Name: '.$clientSiteDetails['site name'].'</p>');
            $pdf->writeHTML('<p>Site Address Line: '.$clientSiteDetails['site address line'].'</p>');
            $pdf->writeHTML('<p>Site Address State: '.$clientSiteDetails['site address state'].'</p>');
            $pdf->writeHTML('<p>Site Postcode: '.$clientSiteDetails['site postcode'].'</p>');
            $pdf->writeHTML('<p>Variation Item: '.$clientSiteDetails['variation item'].'</p>');
            $pdf->writeHTML('<p>Variation Item Price: '.$clientSiteDetails['variation item price'].'</p>');
            $pdf->writeHTML('<p>Variation Description: '.$clientSiteDetails['variation description'].'</p>');
            $pdf->writeHTML('<p>Total Cost: '.$clientSiteDetails['total cost'].'</p>');
            $pdf->writeHTML('<p>Variation Date Request: '.$clientSiteDetails['variation date request'].'</p>');
            $pdf->writeHTML('<p>Created At: '.$clientSiteDetails['created_at'].'</p>');
            $pdf->writeHTML('<p>Updated At: '.$clientSiteDetails['updated_at'].'</p>');
        }
        if(!empty($TermsAndConditions)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Terms And Conditions</h1></div>');
            $pdf->writeHTML('<p>Terms And Conditions: '.$TermsAndConditions['TermsAndConditions'].'</p>');
           // $pdf->writeHTML('<p>Created At: '.$TermsAndConditions['created_at'].'</p>');
           // $pdf->writeHTML('<p>Updated At: '.$TermsAndConditions['updated_at'].'</p>');
        }
        $danhao = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);

        //outpit PDF
//       $pdf =  $pdf->Output(base_path('resources/pdf')."/".date("Y-m-d")."/" .$danhao.'.pdf', 'F');//I输出、D下载、 F保存到服务器\
        $pdf->Output($danhao.'.pdf', 'F');//I-output、D-download、 F-save to server

        return view("client_show",['client_email_find'=>$clientDetails,"pdf"=>$_SERVER['DOCUMENT_ROOT']."pdf/".$danhao.'.pdf','danhao'=>$danhao]);
    }
    //send email
    public function send_email(Request $request){

       $pdf = $request->input("pdf");
        $danhao = $request->input("danhao");
        //get id
        $client_email = $request->input("client_email");
        $content = $request->input("content");
        $subject = "Send Email";
       $seed =  Mail::to($client_email)->send(new SendMail($client_email,$subject,$content,$pdf,$danhao));
        if($seed){
            unlink($pdf);
            return redirect('confirmation')->withInput()->with("msg","Sending succeeded");
        }else{
            unlink($pdf);
            return redirect('confirmation')->withInput()->with("msg","fail in send");
        }

    }
}








?>
