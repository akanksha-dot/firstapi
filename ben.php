<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');




public function beneficiary()
{

 // $postdata = file_get_contents("php://input");
 // $request = json_decode($postdata);

  $data=array(
                    
                    'a'=>'1',
                    'b'=>'2'

            );

 
echo json_encode(['code'=>200,'message'=>'Success!','beneficiaries'=>$data]);
return;




}