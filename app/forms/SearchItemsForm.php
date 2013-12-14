<?php

namespace Pobjeda\Forms;

use Phalcon\Forms\Form,
	Phalcon\Forms\Element\Text,
	Phalcon\Forms\Element\Hidden,
	Phalcon\Forms\Element\Password,
	Phalcon\Forms\Element\Submit,
	Phalcon\Forms\Element\Check,
	Phalcon\Validation\Validator\PresenceOf,
	Phalcon\Validation\Validator\Email,
	Phalcon\Validation\Validator\Identical,
	Phalcon\Validation\Validator\StringLength,
	Phalcon\Validation\Validator\Confirmation;

class SearchItemsForm extends Form
{
	public function initialize()
	{
		$orderId = new Text('idOrder');
		$this->add($orderId);


		$orderId = new Text('idPacking_List');
		$this->add($orderId);		

		$orderId = new Text('Shipment_Number');
		$this->add($orderId);		

		$orderId = new Text('Shipment_Date');
		$this->add($orderId);		

		$orderId = new Text('Delivery_Note');
		$this->add($orderId);		

		$orderId = new Text('Sender_Name');
		$this->add($orderId);		

		$orderId = new Text('Sender_Code');
		$this->add($orderId);		

		$orderId = new Text('Receiver_Name');
		$this->add($orderId);		

		$orderId = new Text('Receiver_Code');
		$this->add($orderId);		

		$orderId = new Text('Item_Type');
		$this->add($orderId);



		$orderId = new Text('idPalete');
		$this->add($orderId);		

		$orderId = new Text('GS1_Code');
		$this->add($orderId);



		$orderId = new Text('idArtupal');
		$this->add($orderId);		

		$orderId = new Text('Product_Code');
		$this->add($orderId);		

		$orderId = new Text('Description');
		$this->add($orderId);		

		$orderId = new Text('Lot_Number');
		$this->add($orderId);		

		$orderId = new Text('Quantity');
		$this->add($orderId);		

		$orderId = new Text('Unit_Of_Measure');
		$this->add($orderId);		

		$orderId = new Text('Count_Of_Units');
		$this->add($orderId);

	

		$orderId = new Text('idPaketi');
		$this->add($orderId);		

		$orderId = new Text('Item_Number');
		$this->add($orderId);		

		$orderId = new Text('Unique_Number');
		$this->add($orderId);		

		$orderId = new Text('Production_Date');
		$this->add($orderId);		

		$orderId = new Text('Number_Of_Items');
		$this->add($orderId);		

		$orderId = new Text('Country_Code');
		$this->add($orderId);

		$orderId = new Text('Site_Code');
		$this->add($orderId);



		$orderId = new Text('idMikro');
		$this->add($orderId);


		$orderId = new Text('idJedinicno');
		$this->add($orderId);
	}
}