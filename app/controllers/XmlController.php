<?php

namespace Pobjeda\Controllers;

use Pobjeda\Models\Users,
    Pobjeda\Models\Order,
    Pobjeda\Models\PackingList,
    Pobjeda\Models\Palete,
    Pobjeda\Models\Artupal,
    Pobjeda\Models\Paketi,
    Pobjeda\Models\Mikro,
    Pobjeda\Models\Jedinicno;


class XmlController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateBefore('private');
    }

    public function indexAction(){
        
    }

    public function uploadAction(){
        if ($this->request->hasFiles() == true) { 
            foreach ($this->request->getUploadedFiles() as $file){
                $fileName = 'files/' . $file->getName();
                $file->moveTo($fileName);
                $xml = simplexml_load_file($fileName);                        
                $userId = $this->auth->getIdUser();
                $user = $this->auth->getUser();
                $this->xmlToDb($xml, $user);               
            }
            $this->flash->success("You've successfully uploaded XML");
        }else{
            $this->flash->error("You've failed to upload XML");
        } 

        return $this->dispatcher->forward(array(
            "action" => "index"
        ));
    }


    protected function xmlToDb($xml, $user){ 
        $order = new Order();
        $order->User = $user->idUsers;
        $order->create();
        foreach( $xml as $orderItem ) 
        {                         
            if ($orderItem->getName() == "Packing_List") {                       
                $packingList = new PackingList();    
                $packingList->Shipment_Number = (string) $orderItem->Shipment_Number;         
                $packingList->Shipment_Date = (string)$orderItem->Shipment_Date;
                $packingList->Delivery_Note = (string)$orderItem->Delivery_Note;
                $packingList->Sender_Name = (string)$orderItem->Sender_Name;
                $packingList->Sender_Code = (string)$orderItem->Sender_Code;
                $packingList->Receiver_Name =(string)$orderItem->Receiver_Name;
                $packingList->Receiver_Code = (string)$orderItem->Receiver_Code;
                $packingList->Order = $order->idOrder;
                $packingList->create();
            }else{
                $palete = new Palete();                       
                $palete->Order = $order->idOrder;
                $palete->GS1_Code = (string)$orderItem->GS1_Code;
                $palete->create();       
                foreach ($orderItem as $paleteItem) {
                    if ($paleteItem->getName() == "Artupal") {                                
                        $artupal = new Artupal();
                        $artupal->Palete = $palete->idPalete;
                        $artupal->Product_Code =  (string)$paleteItem->Product_Code;
                        $artupal->Description =  (string)$paleteItem->Description;
                        $artupal->Lot_Number =  (string)$paleteItem->Lot_Number;
                        $artupal->Quantity =  (string)$paleteItem->Quantity;
                        $artupal->Unit_Of_Measure =  (string)$paleteItem->Unit_Of_Measure;
                        $artupal->Count_Of_Units = (int)$paleteItem->Count_Of_Units;
                        $artupal->create();                  
                        foreach ($paleteItem as $artupalItem) {
                            if ($artupalItem->getName() == "Paketi") {
                                $paketi = new Paketi();
                                $paketi->Artupal = $artupal->idArtupal;                       
                                $paketi->Item_Number = (string)$artupalItem->Item_Number;
                                $paketi->GS1_Code = (string)$artupalItem->GS1_Code;
                                $paketi->Country_Code = (string)$artupalItem->Country_Code;
                                $paketi->Site_Code = (string)$artupalItem->Site_Code;
                                $paketi->Unique_Number = (string)$artupalItem->Unique_Number;
                                $paketi->Product_Code = (string)$artupalItem->Product_Code;
                                $paketi->Description =(string) $artupalItem->Description;
                                $paketi->Production_Date = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', (string)$artupalItem->Production_Date)));
                                $paketi->Quantity = (int)$artupalItem->Quantity;
                                $paketi->Unit_Of_Measure = (string)$artupalItem->Unit_Of_Measure;
                                $paketi->Count_Of_Units = (int)$artupalItem->Count_Of_Units;
                                $paketi->Number_Of_Items = (int)$artupalItem->Number_Of_Items;
                                $paketi->create();
                                foreach ($artupalItem as $paketiItem) {
                                    if ($paketiItem->getName() == "Mikro") {
                                        $mikro = new Mikro();
                                        $mikro->Paketi = $paketi->idPaketi;
                                        $mikro->Item_Number = (string)$paketiItem->Item_Number;
                                        $mikro->Item_Type = (string)$paketiItem->Item_Type;
                                        $mikro->GS1_Code = (string)$paketiItem->GS1_Code;
                                        $mikro->Country_Code = (string)$paketiItem->Country_Code;
                                        $mikro->Site_Code = (string)$paketiItem->Site_Code;
                                        $mikro->Unique_Number = (string)$paketiItem->Unique_Number;
                                        $mikro->Product_Code =(string) $paketiItem->Product_Code;
                                        $mikro->Description = (string)$paketiItem->Description;
                                        $mikro->Production_Date =date('Y-m-d H:i:s', strtotime(str_replace('-', '/', (string)$paketiItem->Production_Date)));
                                        $mikro->Quantity = (string)$paketiItem->Quantity;
                                        $mikro->Unit_Of_Measure = (string)$paketiItem->Unit_Of_Measure;
                                        $mikro->Count_Of_Units = (int)$paketiItem->Count_Of_Units;
                                        $mikro->Number_Of_Items = (int)$paketiItem->Number_Of_Items;
                                        $mikro->create();
                                        foreach ($paketiItem as $mikroItem) {
                                            if ($mikroItem->getName() == "Jedinicno") {
                                                $jedincno = new Jedinicno();                                                        
                                                $jedincno->Item_Number = (string)$mikroItem->Item_Number;
                                                $jedincno->Item_Type = (string)$mikroItem->Item_Type;
                                                $jedincno->GS1_Code = (string)$mikroItem->GS1_Code;
                                                $jedincno->Country_Code = (string)$mikroItem->Country_Code;
                                                $jedincno->Site_Code = (string)$mikroItem->Site_Code;
                                                $jedincno->Unique_Number =(string)$mikroItem->Unique_Number;
                                                $jedincno->Product_Code = (string)$mikroItem->Product_Code;
                                                $jedincno->Description = (string)$mikroItem->Description;
                                                $jedincno->Production_Date = (string)$mikroItem->Production_Date;
                                                $jedincno->Quantity = (string)$mikroItem->Quantity;
                                                $jedincno->Unit_Of_Measure =(int)$mikroItem->Unit_Of_Measure;
                                                $jedincno->Count_Of_Units = (int)$mikroItem->Count_Of_Units;
                                                $jedincno->Number_Of_Items = (int)$mikroItem->Number_Of_Items;
                                                $jedincno->Mikro = $mikro->idMikro;
                                                $jedincno->create();
                                            }                                                
                                        }
                                    }
                                }
                            }
                        }
                    }                                                       
                }
            }
        }  
    }
}
