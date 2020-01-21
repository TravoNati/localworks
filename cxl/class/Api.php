<?php
require 'class/Http.php';
class Api{
    private $Http;
    function __construct()
    {
        $this->Http = new Http();
    }
    private function GetChange($first, $second){
        $oldFigure = floatval($first);
        $newFigure = floatval($second);

        $percentChange = ($newFigure - $oldFigure) / $oldFigure  * 100;

        return round($percentChange, 2);
    }
    public function Login($u, $pw){
        $resp = $this->Http->Get('http://logs.travolutionary.com/Account/Login');

        $token = $this->Http->GetBetween($resp, 'name="__RequestVerificationToken" type="hidden" value="', '"');

        $result = $this->Http->Post("http://logs.travolutionary.com/Account/Login", '__RequestVerificationToken='.$token.'&UserName='.$u.'&Password='.$pw.'&RememberMe=false');

        if (strpos($result, 'Object moved')){
            return true;
        }
        return false;
    }
    private function GetLogs($limit, $fromDate, $toDate, $aff = ""){
        $aff_id = "";
        $aff_var = "";
        $fromDate = str_replace(' ', '%20', $fromDate);
        $toDate = str_replace(' ', '%20', $toDate);
        if ($aff != ""){
            $parts = explode('-', $aff);
            $aff_id = $parts[0];
            $aff_var = $aff;
        }
        return $this->Http->Get('http://logs.travolutionary.com/LogInspect/Data?AffiliateId='.$aff_id.'&AffiliateId_input='.$aff_var.'&FromDate='.$fromDate.'&Limit='.$limit.'&LogLevel=4&Message=price&RuntimeEnv=&Tags=CxlPolicy&ToDate='.$toDate);
    }
    public function GetResults($limit, $fromDate, $toDate, $aff){
        //this ones tricky as we need json.
        $result = $this->GetLogs($limit,$fromDate, $toDate, $aff);
        $trs = $this->Http->GetBetweenAll($result, '<tr>', '</tr>');
        $trs_alt = $this->Http->GetBetweenAll($result, '<tr class="k-alt">', '</tr>');
        foreach ($trs_alt as $ex){
            $trs[] = $ex;
        }
        $json = array();
        $fields = array();

        foreach ($trs as $tr){
            $trEx = str_replace('<td class="pre">', '<td>', $tr);
            $resEx = $this->Http->GetBetweenAll($trEx, '<td>', '</td>');
            $field = array();
            $index = 0;
            foreach ($resEx as $td){
                if ($index == 0){
                    $field['date'] = $td;
                }
                if ($index == 1){
                    $field['app'] = $td;
                }
                if ($index == 6){
                    //message
                    //parse message
                    //echo 'Message: ' . $td . '<br>';
                    $parts = explode(' ', $td);
                    $field['package_id'] = $parts[2];
                    $field['orig_price'] = round($parts[8], 2);
                    $field['orig_tax'] = $parts[10];
                    $field['new_price'] = round($parts[13],2);
                    $field['new_tax'] = $parts[15];
                    $field['supplier'] = str_replace(',', '', $parts[17]);
                    $field['contract'] =  $parts[20];
                    $field['price_change'] = $this->GetChange($parts[8], $parts[13]);
                }
                $index++;
            }
            if (!empty($field)) {
                if (in_array($field, $fields, true) == false) {
                    $fields[] = $field;
                }
            }

            /*$msg = str_replace(' ', '', $field[5]);
            echo $msg;*/


        }

        $json['fields'] = $fields;
        $js = json_encode($json);
            //build json here
       $jsonPost = array();
       $tosend = array();
       $jsonPost['key'] = 'trav2014';

       // For each
       foreach ($json['fields'] as $key => $value) {
           
            $number = $value['price_change'];
            array_push($tosend,$number);
        }
        $jsonPost['message'] = $tosend;
       $response = $this->Http->PostJson('http://error-inspector.herokuapp.com/cxlworks', json_encode($jsonPost));
     //  $xvalue = $response[x];
       
       $yvalue = '[1, 2, 4, 8, 16]';
       if ($response == "thank you for your message nati"){
       // echo 'AvivApi:', $response;
       
       
    }
    else {
        // Y
        $obj = json_decode($response, true);
        $y1 = $obj['y'][0];
        $y2 = $obj['y'][1];
        $y3 = $obj['y'][2];
        $y4 = $obj['y'][3];
        $y5 = $obj['y'][4];
        $y6 = $obj['y'][5];
        $y7 = $obj['y'][6];
        $y8 = $obj['y'][7];
        $y9 = $obj['y'][8];
        // what do i give to aviv
       // echo $js;
       
       echo "<center>";
        echo "<script src='https://cdn.plot.ly/plotly-latest.min.js'></script>";
        echo '<div id="tester" style="width:1200px;height:550px;margin-top: 2rem;"></div>';
        echo "<script> 	TESTER = document.getElementById('tester');
	Plotly.plot( TESTER, [
    {
        // 
 
        x: ['1%-2%','2%-3%','3%-4%','4%-5%','5%-7%','7%-10%','10%-15%','15%-20%','20%+'],
        y: [$y1, $y2, $y3, $y4, $y5, $y6, $y7, $y8, $y9],
        type: 'bar',
        width: 0.3
        
    }], {
    margin: { t: 0 } } ); "
    . "</script>";
    echo "</center>";
      //echo $yvalue;
      //echo $response;
    }
       return $js;
      
    }
}