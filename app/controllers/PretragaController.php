<?php

class PretragaController extends ControllerBase
{


     public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Pretraga');
        parent::initialize();
    }
    
        
    public function indexAction()
    {
        
    }
    
    public function onakoAction()
    {
    
    }
    
    private function getLists(){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist");
        $pLista = $query->execute();
        return $pLista;
    }
    
    private function getPalete(){
        $query = $this->modelsManager->createQuery("SELECT * FROM palete");
        $palete = $query->execute();
        return $palete;
    }
    
    private function getArtupal(){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal");
        $artupal = $query->execute();
        return $artupal;
    }
    
    private function getPaket(){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi");
        $paket = $query->execute();
        return $paket;
    }
    
    public function getShipmentNumberAction(){
        $this->view->disable();
        $sNumbers = array();
        $pLista = $this->getLists();
        if(count($pLista)==0){
            return null;
        }
        else{
            foreach($pLista as $p){
                $sNumbers[]= $p->Shipment_Number;
            }
        }
        echo json_encode($sNumbers);
    }
    
    public function getSenderCodeAction(){
        $this->view->disable();
        $sCodes = array();
        $pLista = $this->getLists();
        if(count($pLista)==0){
            return null;
        }
        foreach($pLista as $p){
            $sCodes[] = $p->Sender_Code;
        }
      
        echo json_encode($sCodes);
    }
    
    public function getReceiverCodeAction(){
        $this->view->disable();
        $rCodes = array();
        $pLista = $this->getLists();
        if(count($pLista)==0){
            return null;
        }
        foreach($pLista as $p){
            $rCodes[] = $p->Receiver_Code;
        }
      
        echo json_encode($rCodes);
    }
    
    
    public function getGS1CodeAction(){
        $this->view->disable();
        $gsCodes = array();
        $palete = $this->getPalete();
        if(count($palete)==0){
            return null;
        }
        foreach($palete as $p){
            $gsCodes[] = $p->GS1_Code;
        }
        echo json_encode($gsCodes);
    }
    
    public function getProductCodeAction(){
        $this->view->disable();
        $artupals = $this->getArtupal();
        if(count($artupals)==0){
            return null;
        }
        else{
            $pCodeList = array();
            foreach($artupals as $a){
                $pCodeList[]=$a->Product_Code;
            }
            echo json_encode($pCodeList);
        }
    }
    
    
    public function getDescriptionAction(){
        $this->view->disable();
        $artupals = $this->getArtupal();
        if(count($artupals)==0){
            return null;
        }
        else{
            $descList = array();
            foreach($artupals as $a){
                $descList[]=$a->Description;
            }
            echo json_encode($descList);
        }
    }
    
    public function getLotNumberAction(){
        $this->view->disable();
        $artupals = $this->getArtupal();
        if(count($artupals)==0){
            echo json_encode(null);
        }
        else{
            $lotList = array();
            foreach($artupals as $a){
                $lotList[]=$a->Lot_Number;
            }
            echo json_encode($lotList);
        }
    }
    //vrijednosti za fomular paketa
    public function getItemNumberAction(){
        $this->view->disable();
        $paketi = $this->getPaket();
        if(count($paketi)==0){
            echo json_encode(null);
        }
        else{
            $paketList = array();
            foreach($paketi as $p){
                $paketList[] = $p->Item_Number;
            }
            echo json_encode($paketList);
        }
    }
    
    
       public function getUniqueNumberAction(){
        $this->view->disable();
        $paketi = $this->getPaket();
        if(count($paketi)==0){
            echo json_encode(null);
        }
        else{
            $paketList = array();
            foreach($paketi as $p){
                $paketList[] = $p->Unique_Number;
            }
            echo json_encode($paketList);
        }
    }
    
    
    public function getCountryCodeAction(){
        $this->view->disable();
        $paketi = $this->getPaket();
        if(count($paketi)==0){
            echo json_encode(null);
        }
        else{
            $paketList = array();
            foreach($paketi as $p){
                $paketList[] = $p->Country_Code;
            }
            echo json_encode($paketList);
        }
    }
    
    
    
    public function getPackingListAction(){
        $this->view->disable();
        $sNumber = $_POST['sNumber'];
        $sCode = $_POST['sCode'];
        $rCode = $_POST['rCode'];
        $pListe = array();
        if($sCode!="" && $sNumber!="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber: AND
                                                   packinglist.Sender_Code=:sCode: AND packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('sNumber'=>$sNumber, 'sCode'=>$sCode, 'rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         }
        }
        
        else if($sNumber=="" && $sCode!="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Sender_Code=:sCode: AND packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('sCode'=>$sCode, 'rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         }
        }
        
        else if($sNumber=="" && $sCode=="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($sNumber!="" && $sCode=="" && $rCode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber:");
        $pLista = $query->execute(array('sNumber'=>$sNumber));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($sNumber=="" && $sCode!="" && $rCode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Sender_Code=:sCode:");
        $pLista = $query->execute(array('sCode'=>$sCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($sNumber!="" && $sCode=="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber: AND packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('sNumber'=>$sNumber, 'rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
         else if($sNumber!="" && $sCode!="" && $rCode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber: AND packinglist.Sender_Code=:sCode:");
        $pLista = $query->execute(array('sNumber'=>$sNumber, 'sCode'=>$sCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        if(count($pListe)==0){
            echo json_encode(null);
        }
        else{
        echo json_encode($pListe);
        }
    }
    
    //funkcija za dobavljanje paleta
    public function getPaleteAction(){
        $this->view->disable();
        $gsCode = $_POST['gsCode'];
        $iType = $_POST['iType'];
        $palete = array();
        if($gsCode!="" && $iType!=""){
            $query = $this->modelsManager->createQuery("SELECT * FROM palete WHERE palete.GS1_Code=:gsCode: AND palete.Item_Type=:iType:");
            $palet = $query->execute(array('gsCode'=>$gsCode, 'iType'=>$iType));
            foreach($palet as $p){
            $palete[]= $p;
            }
        }
        else if($gsCode!="" && $iType==""){
            $query = $this->modelsManager->createQuery("SELECT * FROM palete WHERE palete.GS1_Code=:gsCode:");
            $palet = $query->execute(array('gsCode'=>$gsCode));
            foreach($palet as $p){
            $palete[]= $p;
            }
        }
        else if($gsCode=="" && $iType!=""){
            $query = $this->modelsManager->createQuery("SELECT * FROM palete WHERE palete.Item_Type=:iType:");
            $palet = $query->execute(array('iType'=>$iType));
            foreach($palet as $p){
            $palete[]= $p;
            }
        }
        if(count($palete)==0){
            echo json_encode(null);
        }
        else{
        echo json_encode($palete);
        }
    }
    
    public function getArtupalsForPaleteAction(){
        $this->view->disable();
        $idPalete = $_POST["idPalete"];
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Palete=:palete:");
        $palet = $query->execute(array('palete'=>$idPalete));
        if(count($palet)==0){
            echo json_encode(null);
        }
        else{
            $artupali = array();
            foreach($palet as $o){
                $artupali[]=$o;
            }
            echo json_encode($artupali);
        }
    }
    
    
        public function getArtupalAction(){
        $this->view->disable();
        $prodCode = $_POST['prodcode'];
        $desc = $_POST['desc'];
        $lotnum = $_POST['lotnum'];
        $artupalListe = array();
        if($prodCode!="" && $desc!="" && $lotnum!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Product_Code=:prodCode: AND
                                                   artupal.Description=:desc: AND artupal.Lot_Number=:lotnum:");
        $artupals = $query->execute(array('prodCode'=>$prodCode, 'desc'=>$desc, 'lotnum'=>$lotnum));
         
         foreach($artupals as $e){
            $artupalListe[] = $e;
         }
        }
        
        else if($prodCode=="" && $desc!="" && $lotnum!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Description=:desc: AND artupal.Lot_Number=:lotnum:");
        $pLista = $query->execute(array('desc'=>$desc, 'lotnum'=>$lotnum));
         
         foreach($pLista as $e){
            $artupalListe[] = $e;
         }
        }
        
        else if($prodCode=="" && $desc=="" && $lotnum!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Lot_Number=:lotnum:");
        $pLista = $query->execute(array('lotnum'=>$lotnum));
         
         foreach($pLista as $e){
            $artupalListe[] = $e;
         } 
        }
        
        else if($prodCode!="" && $desc=="" && $lotnum==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Product_Code=:prodCode:");
        $pLista = $query->execute(array('prodCode'=>$prodCode));
         
         foreach($pLista as $packet){
            $artupalListe[] = $packet;
         } 
        }
        
        else if($prodCode=="" && $desc!="" && $lotnum==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Description=:desc:");
        $pLista = $query->execute(array('desc'=>$desc));
         
         foreach($pLista as $packet){
            $artupalListe[] = $packet;
         } 
        }
        
        else if($prodCode!="" && $desc=="" && $lotnum!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Product_Code=:prodCode: AND artupal.Lot_Number=:lotnum:");
        $pLista = $query->execute(array('prodCode'=>$prodCode, 'lotnum'=>$lotnum));
         
         foreach($pLista as $packet){
            $artupalListe[] = $packet;
         } 
        }
        
         else if($prodCode!="" && $desc!="" && $lotnum==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Product_Code=:prodCode: AND artupal.Description=:desc:");
        $pLista = $query->execute(array('prodCode'=>$prodCode, 'desc'=>$desc));
         
         foreach($pLista as $packet){
            $artupalListe[] = $packet;
         } 
        }
        
        if(count($artupalListe)==0){
            echo json_encode(null);
        }
        else{
        echo json_encode($artupalListe);
        }
    }
    
    public function getPaketiforAtrupalAction(){
        $this->view->disable();
        $idArtupal = $_POST['idArtupal'];
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Artupal=:idArtupal:");
        $paket = $query->execute(array('idArtupal'=>$idArtupal));
        if(count($paket)==0){
            echo json_encode(null);
        }
        else{
            $paketList = array();
            foreach($paket as $p){
                $paketList[]=$p;
            }
            echo json_encode($paketList);
        }
        
    }
    
    // pretraga paketa
    public function getPaketListAction(){
        $this->view->disable();
        $itemnum = $_POST['itemnum'];
        $unum = $_POST['unum'];
        $cocode = $_POST['cocode'];
        $pListe = array();
        if($itemnum!="" && $unum!="" && $cocode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Item_Number=:itemnum: AND
                                                   paketi.Unique_Number=:unum: AND paketi.Country_Code=:cocode:");
        $pLista = $query->execute(array('itemnum'=>$itemnum, 'unum'=>$unum, 'cocode'=>$cocode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         }
        }
        
        else if($itemnum=="" && $unum!="" && $cocode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Unique_Number=:unum: AND paketi.Country_Code=:cocode:");
        $pLista = $query->execute(array('unum'=>$unum, 'cocode'=>$cocode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         }
        }
        
        else if($itemnum=="" && $unum=="" && $cocode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Country_Code=:cocode:");
        $pLista = $query->execute(array('cocode'=>$cocode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($itemnum!="" && $unum=="" && $cocode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Item_Number=:itemnum:");
        $pLista = $query->execute(array('itemnum'=>$itemnum));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($itemnum=="" && $unum!="" && $cocode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Unique_Number=:unum:");
        $pLista = $query->execute(array('unum'=>$unum));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($itemnum!="" && $unum=="" && $cocode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Item_Number=:itemnum: AND paketi.Country_Code=:cocode:");
        $pLista = $query->execute(array('itemnum'=>$itemnum, 'cocode'=>$cocode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
         else if($itemnum!="" && $unum!="" && $cocode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM paketi WHERE paketi.Item_Number=:itemnum: AND paketi.Unique_Number=:unum:");
        $pLista = $query->execute(array('itemnum'=>$itemnum, 'unum'=>$unum));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        if(count($pListe)==0){
            echo json_encode(null);
        }
        else{
        echo json_encode($pListe);
        }
    }
    
      public function bezeAction(){
        $this->view->disable();
        $opcija = $_POST['opcija'];
        $rezultat = $_POST['rezultat'];
        $artupal = $_POST['artupal'];
        $brpalete = $_POST['brpalete'];
        $paket = $_POST['paket'];
        $brartupala = $_POST['brartupala'];
        
        $rez1 = array();
        $rez2 = array();
        $rez3 = array();
        foreach($rezultat as $r){
            $rez1[]=$r;
        }
        if($artupal != "prazan"){
        foreach($artupal as $a){
            $rez2[]=$a;
        }
        }
        
        if($paket != "prazan"){
            foreach($paket as $p){
                $rez3[]=$p;
            }
        }
        
        $this->view->setVars(array('rez1'=>$rez1, 'opcija'=>$opcija, 'artupal'=>$rez2, 'brpalete'=>$brpalete, 'paket'=>$rez3, 'brartupal'=>$brartupala));
        $loader = new \Phalcon\Loader();
        $loader->registerClasses(
        array(
        "mpdf"=> "C:/wamp/www/pobjeda/mpdf/mpdf.php"
            )
        );

// register autoloader
         $loader->register();
       // $string = "Ja se zovem Nedim Omerbegovic, a vi ste odabrali opciju broj: ". $opcija;
       
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        $cont = $this->view->getRender('pretraga', 'beze');
        //generisanje pdf dokumenta
        $pdf = new mpdf();
        $pdf->WriteHTML($cont, 2);
        $ispis = "Pobjeda Rudet_pretraga.pdf";
        $pdf->Output($ispis, 'F');
        
        echo json_encode($ispis);

    }
    
   

}

