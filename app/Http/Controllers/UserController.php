<?php
 
namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\lov;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show_pdf(Request $request){

        //get id
        $id = $request->input("id");

        $VariationDetails = DB::table("VariationDetails")->where("id","=",$id)->get()->first();
        if(!empty($VariationDetails)){
            $VariationDetails = get_object_vars($VariationDetails);
        }else{
            $VariationDetails  =[];
        }
        $VariationDetails = DB::table("VariationDetails")->where("id","=",$id)->get()->first();
        if(!empty($VariationDetails)){
            $VariationDetails = get_object_vars($VariationDetails);
        }else{
            $VariationDetails=[];
        }
        $TermsAndConditions = DB::table("TermsAndConditions")->where("id",1)->get()->first();
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

        $pdf->setHeaderFont(['helvetica', '', '10']);
        $pdf->setFooterFont(['helvetica', '', '8']);
        
        $pdf->SetDefaultMonospacedFont('helvetica');
        
        $pdf->SetMargins(15, 15, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        // set subpage
        $pdf->SetAutoPageBreak(true, 25);
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);
        //Font senting
        $pdf->SetFont('helvetica', '', 14);

        $logo_path=public_path('images').'/details.jpg';


        if(!empty($VariationDetails)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Details</h1></div>');
            $pdf->writeHTML('<p><strong>First Name: </strong>'.$VariationDetails['firstName'].'</p>');
            $pdf->writeHTML('<p><strong>Last Name: </strong>'.$VariationDetails['lastName'].'</p>');
            $pdf->writeHTML('<p><strong>Client Email: </strong>'.$VariationDetails['clientEmail'].'</p>');
            $pdf->writeHTML('<p><strong>Phone Number: </strong>'.$VariationDetails['phoneNumber'].'</p>');
            $pdf->writeHTML('<p><strong>Date: </strong>'.$VariationDetails['date'].'</p>');
            $pdf->writeHTML('<p><strong>Company Name: </strong>'.$VariationDetails['companyName'].'</p>');
            $pdf->writeHTML('<p><strong>ABN: </strong>'.$VariationDetails['abn'].'</p>');
            $pdf->writeHTML('<p><strong>Addre2ss Line: </strong>'.$VariationDetails['addressLine'].'</p>');
            $pdf->writeHTML('<p><strong>Suburb: </strong>'.$VariationDetails['suburb'].'</p>');
            $pdf->writeHTML('<p><strong>Postcode: </strong>'.$VariationDetails['postcode'].'</p>');
            //$pdf->writeHTML('<p>Created At: '.$VariationDetails['created_at'].'</p>');
            //$pdf->writeHTML('<p>Updated At: '.$VariationDetails['updated_at'].'</p>');
        //}
        //if(!empty($VariationDetails)){
            //$pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Site Details</h1></div>');
            $pdf->writeHTML('<p><strong>Job Reference Number: </strong>'.$VariationDetails['jobReferenceNumber'].'</p>');
            $pdf->writeHTML('<p><strong>Order Number: </strong>'.$VariationDetails['orderNumber'].'</p>');
            $pdf->writeHTML('<p><strong>Site Name: </strong>'.$VariationDetails['siteName'].'</p>');
            $pdf->writeHTML('<p><strong>Site Address Line: </strong>'.$VariationDetails['siteAddressLine'].'</p>');
            $pdf->writeHTML('<p><strong>Site Address State: </strong>'.$VariationDetails['siteAddressState'].'</p>');
            $pdf->writeHTML('<p><strong>Site Postcode: </strong>'.$VariationDetails['sitePostcode'].'</p>');
            $pdf->writeHTML('<p><strong>Variation Description: </strong><br>'.nl2br($VariationDetails['variationDescription']).'</p>');
            $pdf->writeHTML('<p><strong>Total Cost: </strong>'.$VariationDetails['totalCost'].'</p>');
            $pdf->writeHTML('<p><strong>Variation Date Request: </strong>'.$VariationDetails['variationDateRequest'].'</p>');

            $pdf->Image($logo_path, 130, 3, 80, 40, '', '', '', true, 200, '', false, false, 0, false, false, false);


            // $pdf->writeHTML('<img src='.public_path('/').$VariationDetails['signatureUpload'].'>');
            // $pdf->writeHTML('<p>Created At: '.public_path('/').$VariationDetails['signatureUpload'].'</p>');
            //$pdf->writeHTML('<p>Updated At: '.$VariationDetails['updated_at'].'</p>');
            // $pdf->Image("'".public_path('/').$VariationDetails['signatureUpload']."'");
        }
        if(!empty($TermsAndConditions)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Terms And Conditions</h1></div>');
            $pdf->writeHTML('<p>Terms And Conditions: '.nl2br($TermsAndConditions['TermsAndConditions']).'</p>');
            
            $pdf->writeHTML('<div><h4>Date: '.$VariationDetails['date'].'</h4></div>');
            $pdf->writeHTML('<div style="text-align: center"><h4>Signature</h4></div>');
            if(!empty($VariationDetails['signatureUpload'])){
                    $VariationDetails['signatureUpload'] = explode("/", $VariationDetails['signatureUpload']);
		            $img_path = public_path('upload')."/".$VariationDetails['signatureUpload'][1]; 
		            $pdf->Image($img_path, 80, 150, 60, 60, '', '', '', true, 300, '', false, false, 0, false, false, false);	
            }

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

        $confirmation =DB::table("VariationDetails")->orderBy('id',"desc")->get()->first();
        
        // $client_list_data =[];
        // foreach ($confirmation as $item){
        //     $client_list_data[] = get_object_vars($item);
        // }

        if(!empty($confirmation)){
            $client_list_data[] = get_object_vars($confirmation);
            $TermsAndConditions = DB::table("TermsAndConditions")->where('id',1)->get()->first();
            if(!empty($TermsAndConditions)){
                $TermsAndConditions = get_object_vars($TermsAndConditions);
            }else{
                $TermsAndConditions=[];
            }
        }else{
            $TermsAndConditions=[];
            $client_list_data=[];
        }
   
        return view("confirmation",['client_list_data'=>$client_list_data,'terms_and_conditions'=>$TermsAndConditions]);    
    }


    //email contents
    public function client_show(Request $request){
        //get id
        $id = $request->input("id");

        $VariationDetails = DB::table("VariationDetails")->where("id","=",$id)->get()->first();
        if(!empty($VariationDetails)){
            $VariationDetails = get_object_vars($VariationDetails);
        }else{
            $VariationDetails  =[];
        }
        $VariationDetails = DB::table("VariationDetails")->where("id","=",$id)->get()->first();
        if(!empty($VariationDetails)){
            $VariationDetails = get_object_vars($VariationDetails);
        }else{
            $VariationDetails=[];
        }
        $TermsAndConditions = DB::table("TermsAndConditions")->where("id",1)->get()->first();
        if(!empty($TermsAndConditions)){
            $TermsAndConditions = get_object_vars($TermsAndConditions);
        }else{
            $TermsAndConditions=[];
        }
        //generate pdf
        $pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // contents of padf file
        $pdf->SetCreator('XCEED');
        $pdf->SetAuthor('XCEED');
        $pdf->SetTitle('XCEED');
        $pdf->SetSubject('XCEED');
        $pdf->SetKeywords('XCEED');
        // font of header and footer
        $pdf->setHeaderFont(['helvetica', '', '10']);
        $pdf->setFooterFont(['helvetica', '', '8']);
        
        $pdf->SetDefaultMonospacedFont('helvetica');
        // margins
        $pdf->SetMargins(15, 15, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        // page break
        $pdf->SetAutoPageBreak(true, 25);
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);
        
        $pdf->SetFont('helvetica', '', 14);

        $logo_path=public_path('images').'/details.jpg';

        if(!empty($VariationDetails)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Details</h1></div>');
            $pdf->writeHTML('<p><strong>First Name: </strong>'.$VariationDetails['firstName'].'</p>');
            $pdf->writeHTML('<p><strong>Last Name: </strong>'.$VariationDetails['lastName'].'</p>');
            $pdf->writeHTML('<p><strong>Client Email: </strong>'.$VariationDetails['clientEmail'].'</p>');
            $pdf->writeHTML('<p><strong>Phone Number: </strong>'.$VariationDetails['phoneNumber'].'</p>');
            $pdf->writeHTML('<p><strong>Date: </strong>'.$VariationDetails['date'].'</p>');
            $pdf->writeHTML('<p><strong>Company Name: </strong>'.$VariationDetails['companyName'].'</p>');
            $pdf->writeHTML('<p><strong>ABN: </strong>'.$VariationDetails['abn'].'</p>');
            $pdf->writeHTML('<p><strong>Address Line: </strong>'.$VariationDetails['addressLine'].'</p>');
            $pdf->writeHTML('<p><strong>Suburb: </strong>'.$VariationDetails['suburb'].'</p>');
            $pdf->writeHTML('<p><strong>ostcode: </strong>'.$VariationDetails['postcode'].'</p>');
            //$pdf->writeHTML('<p>Created At: '.$VariationDetails['created_at'].'</p>');
            //$pdf->writeHTML('<p>Updated At: '.$VariationDetails['updated_at'].'</p>');
        //}
       // if(!empty($VariationDetails)){
           // $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Client Site Details</h1></div>');
            $pdf->writeHTML('<p><strong>Job Reference Number: </strong>'.$VariationDetails['jobReferenceNumber'].'</p>');
            $pdf->writeHTML('<p><strong>Order Number: </strong>'.$VariationDetails['orderNumber'].'</p>');
            $pdf->writeHTML('<p><strong>Site Name: </strong>'.$VariationDetails['siteName'].'</p>');
            $pdf->writeHTML('<p><strong>Site Address Line: </strong>'.$VariationDetails['siteAddressLine'].'</p>');
            $pdf->writeHTML('<p><strong>Site Address State: </strong>'.$VariationDetails['siteAddressState'].'</p>');
            $pdf->writeHTML('<p><strong>Site Postcode: </strong>'.$VariationDetails['sitePostcode'].'</p>');
            $pdf->writeHTML('<p><strong>Variation Description: </strong><br>'.nl2br($VariationDetails['variationDescription']).'</p>');
            $pdf->writeHTML('<p><strong>Total Cost: </strong>'.$VariationDetails['totalCost'].'</p>');
            $pdf->writeHTML('<p><strong>Variation Date Request: </strong>'.$VariationDetails['variationDateRequest'].'</p>');
            $pdf->writeHTML('<img src='.$VariationDetails['signatureUpload'].'>');
            //$pdf->writeHTML('<p>Updated At: '.$VariationDetails['updated_at'].'</p>');

            $pdf->Image($logo_path, 130, 3, 80, 40, '', '', '', true, 200, '', false, false, 0, false, false, false);
        }
        if(!empty($TermsAndConditions)){
            $pdf->AddPage();
            $pdf->writeHTML('<div style="text-align: center"><h1>Terms And Conditions</h1></div>');
            $pdf->writeHTML('<p>Terms And Conditions: '.nl2br($TermsAndConditions['TermsAndConditions']).'</p>');
            $pdf->writeHTML('<div><h4>Date: '.$VariationDetails['date'].'</h4></div>');
            $pdf->writeHTML('<div style="text-align: center"><h4>Signature</h4></div>');
            if(!empty($VariationDetails['signatureUpload'])){
             	$VariationDetails['signatureUpload'] = explode("/", $VariationDetails['signatureUpload']);
            	$img_path = public_path('upload')."/".$VariationDetails['signatureUpload'][1]; 
            	$pdf->Image($img_path, 80, 150, 60, 60, '', '', '', true, 300, '', false, false, 0, false, false, false);
            }


           // $pdf->writeHTML('<p>Created At: '.$TermsAndConditions['created_at'].'</p>');
           // $pdf->writeHTML('<p>Updated At: '.$TermsAndConditions['updated_at'].'</p>');
        }
        $danhao = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);

        //outpit PDF
//       $pdf =  $pdf->Output(base_path('resources/pdf')."/".date("Y-m-d")."/" .$danhao.'.pdf', 'F');//I输出、D下载、 F保存到服务器\
        $pdf->Output($danhao.'.pdf', 'F');//I-output、D-download、 F-save to server

        return view("client_show",['client_email_find'=>$VariationDetails,"pdf"=>$_SERVER['DOCUMENT_ROOT']."pdf/".$danhao.'.pdf','danhao'=>$danhao]);
    }
    //send email

    public function signature(Request $request ){
        
        //store signature inside folder/db
        $id = $_POST['id'];


        $folderPath = "upload/";
        $image_parts = explode(";base64,", $_POST['signed']); 
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.'.$image_type;
        
        file_put_contents($file, $image_base64);
        Db::table("variationdetails")->where("id",$id)->update(["signatureUpload"=>$file]);

        return redirect()->back()->withInput();
        
    }

    public function send_email(Request $request){

        $pdf = $request->input("pdf");
        $danhao = $request->input("danhao");
       
        //get id
        $client_email = $request->input("client_email");
        $content = $request->input("content");
        $subject = "Variation Information";
        $seed =  Mail::to($client_email)->send(new SendMail($client_email,$subject,$content,$pdf,$danhao));
        if($seed){
            unlink($pdf);
            return redirect('lov')->withInput()->with("msg","Sending succeeded");
        }else{
            unlink($pdf);
            return redirect('lov')->withInput()->with("msg","fail in send");
        }


    }
}








?>