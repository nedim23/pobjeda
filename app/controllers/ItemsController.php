<?php

namespace Pobjeda\Controllers;

use Phalcon\Tag,
	Phalcon\Mvc\Model\Criteria,
	Phalcon\Exception,
	Phalcon\Paginator\Adapter\Model as Paginator;

use Pobjeda\Models\Users,
    Pobjeda\Models\Order,
    Pobjeda\Models\PackingList,
    Pobjeda\Models\Palete,
    Pobjeda\Models\Artupal,
    Pobjeda\Models\Paketi,
    Pobjeda\Models\Mikro,
    Pobjeda\Models\Jedinicno,
    Pobjeda\Models\SuccessSearch,
    Pobjeda\Models\SearchParams;

use Pobjeda\Forms\SearchItemsForm;

use Pobjeda\Tcpdf\TCPDF;


/**
 * Pobjeda\Controllers\ItemsController
 *
 */
class ItemsController extends ControllerBase
{

    public function initialize()
    {
        $this->view->setTemplateBefore('private');
    }

    public function indexAction(){
		$this->persistent->conditions = null;
		$this->view->form = new SearchItemsForm();
	}
	
	/**
	 * Searches for items
	 */
	public function searchAction()
	{
		$itemType = "";		
		if ($this->request->isPost()) {
			$itemType = $this->request->getPost('ItemType');
		}

		if ($itemType == "") {
			$itemType = $this->request->getQuery('itemtype', 'string');

			$itemType = ucfirst($itemType);
			if ($itemType == "Packinglist") {
				$itemType = "PackingList";
			}
		}

		$itemClass = 'Pobjeda\Models\\'.$itemType;		

		$numberPage = 1;
		if ($this->request->isPost()) {
			$query = Criteria::fromInput($this->di, $itemClass, $this->request->getPost());
			$this->persistent->searchParams = $query->getParams();
		} else {
			$numberPage = $this->request->getQuery("page", "int");
		}

		$parameters = array();
		if ($this->persistent->searchParams) {
			$parameters = $this->persistent->searchParams;
		}
		
		$item = null;
		if (count($parameters) == 0) {
			$items = $itemClass::find();
		}else{
			$items = $itemClass::find($parameters[0]);
		}		
		if (count($items) == 0) {
			$this->flash->notice("The search did not find any results");
			return $this->dispatcher->forward(array(
				"action" => "index"
			));
		}

		$paginator = new Paginator(array(
			"data" => $items,
			"limit" => 10,
			"page" => $numberPage,
			"itemType" => $itemClass
		));

		$this->view->parameters = $parameters;
		$this->view->itemClass = $itemType;
		$this->view->page = $paginator->getPaginate();

		$successSearch = new SuccessSearch();
		$successSearch->User = $this->auth->getIdUser();
		$successSearch->ipAddress = $this->request->getClientAddress();
		$successSearch->userAgent = $this->request->getUserAgent();
		if (!$successSearch->save()) {
			$messages = $successSearch->getMessages();
			throw new Exception($messages[0]);
		}
	}

	public function pdfAction($id){		
		$this->view->disable();
		$itemType = "";		
		if ($this->request->isPost()) {
			$itemType = $this->request->getPost('ItemType');
		}

		if ($itemType == "") {
			$itemType = $this->request->getQuery('itemtype', 'string');

			$itemType = ucfirst($itemType);
			if ($itemType == "Packinglist") {
				$itemType = "PackingList";
			}
		}

		$itemClass = 'Pobjeda\Models\\'.$itemType;
		$findMethod = 'findFirstById'.$itemType;		

		if ($itemType == "PackingList") {
			$findMethod = 'findFirstByIdPacking_List';
		}

		$item = $itemClass::$findMethod($id);

		$pdf = new TCPDF("L", "mm", "4", true, 'UTF-8', false);

		$pdf->SetFont('helvetica', '', 12);

		$pdf->AddPage();

		$header = [
			'PackingList' => array(
				'Belonging order Id',
				'Packing list Id', 
				'Shipment number', 
				'Shipment date', 
				'Delivery note', 
				'Sender name', 
				'Sender code', 
				'Receiver name', 
				'Receiver code', 
				'Item type'
			),
			'Palete' => array(
				'Belonging order Id',
				'Palete Id', 
				'GS1_Code', 
				'Item type', 
				'Containing Artupal with IDs'
			),
			'Artupal' => array(
				'Belonging palete Id',
				'Artupal Id', 
				'Product code', 
				'Description', 
				'Lot number', 
				'Quantity', 
				'Unit of measure', 
				'Count of units', 
				'Item type', 
				'Containing Paketi with IDs'
			),
			'Paketi' => array(
				'Belonging artupal Id',
				'Paketi Id', 
				'Item number', 
				'Item type', 
				'Unique number', 
				'Product code', 
				'Description', 
				'Production date', 
				'Quantity', 
				'Unit of measure', 
				'Count of units', 
				'Number of items', 
				'GS1 code', 
				'Country code', 
				'Site code', 
				'Containing Mikro with IDs'
			),
			'Mikro' => array(
				'Belonging paketi Id',
				'Mikro Id', 
				'Item number', 
				'Item type',  
				'GS1 code', 
				'Country code', 
				'Site code',
				'Unique number', 
				'Product code', 
				'Description', 
				'Production date', 
				'Quantity', 
				'Unit of measure', 
				'Count of units', 
				'Number of items', 
				'Containing Jedinicno with IDs'
			),
			'Jedinicno' => array(
				'Belonging mikro Id',
				'Paketi Id', 
				'Item number', 
				'Item type',  
				'GS1 code', 
				'Country code', 
				'Site code',
				'Unique number', 
				'Product code', 
				'Description', 
				'Production date', 
				'Quantity', 
				'Unit of measure', 
				'Count of units', 
				'Number of items'
			),
			'Order' => array(
				'Created by user', 
				'Order Id', 
				'Created At'
			)
		];

		$data = get_object_vars($item);

		$col = array();
		foreach ($header as $key1){
		    foreach ($data as $key2){
		        $col[] = [array_shift($header[$itemType]), array_shift($data)];	
		    }
		}

		$tbl_header = '<strong>'.$itemType.' sample </strong><br/> <table style="width: 788px;" cellspacing="0">';
		$tbl_footer = '</table>';
		$tbl = '';

		foreach ($col as &$value) {
		   $tbl .= '	
		    <tr>
		        <td style="border: 1px solid #000000; width: 150px; height: 20px; padding: 5px;">'.$value[0].'</td>
		        <td style="border: 1px solid #000000; width: 528px; padding: 5px;">'.$value[1].'</td>
		    </tr>';
		}		

		$pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, false, false, false, '');

		$pdf->Output('export.pdf', 'I');	
	}

	public function orderAction($id){

		$item = Order::findFirstByIdOrder($id);

		$palete = Palete::find(array('Order' => $id));
		$packingList = PackingList::find(array('Order' => $id));

		if ($item == false) {
			throw new Exception('The order does not exist');
		}
		$this->view->item = $item;
		$this->view->palete = $palete;
		$this->view->packingList = $packingList;
	}

	public function packingListAction($id){
		$item = PackingList::findFirstByIdPacking_List($id);
		if ($item == false) {
			throw new Exception('The Packing list does not exist');
		}
		$this->view->item = $item;
	}

	public function paleteAction($id){
		$item = Palete::findFirstByIdPalete($id);
		$subItems = Artupal::find("Palete = '" . $item->idPalete . "'");
		if ($item == false) {
			throw new Exception('The palete does not exist');
		}
		$this->view->item = $item;
		$this->view->subItems = $subItems;
	}

	public function artupalAction($id){
		$item = Artupal::findFirstByIdArtupal($id);
		$subItems = Paketi::find("Artupal = '" . $item->idArtupal . "'");
		if ($item == false) {
			throw new Exception('The artupal does not exist');
		}
		$this->view->item = $item;
		$this->view->subItems = $subItems;
	}

	public function paketiAction($id){
		$item = Paketi::findFirstByIdPaketi($id);
		$subItems = Mikro::find("Paketi = '" . $item->idPaketi . "'");
		if ($item == false) {
			throw new Exception('The oaketi does not exist');
		}
		$this->view->item = $item;
		$this->view->subItems = $subItems;
	}

	public function mikroAction($id){
		$item = Mikro::findFirstByIdMikro($id);
		$subItems = Jedinicno::find("Mikro = '" . $item->idMikro . "'");
		if ($item == false) {
			throw new Exception('The mikro does not exist');
		}
		$this->view->item = $item;
		$this->view->subItems = $subItems;
	}

	public function jedinicnoAction($id){
		$item = Jedinicno::findFirstByIdJedinicno($id);

		if ($item == false) {
			throw new Exception('The jedinicno does not exist');
		}
		$this->view->item = $item;
	}
}