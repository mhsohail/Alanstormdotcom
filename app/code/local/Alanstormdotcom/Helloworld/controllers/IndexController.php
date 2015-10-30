<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<head>
<title>Odesk...</title>
<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<script type="text/javascript">
	document.write("<meta name=\"author\" content=\"Hege Refsnes\">");
</script>
</head>

<script>
var m = document.createElement('meta'); 
m.name = 'description'; 
m.content = 'This tutorial has some helpful information for you, if you want to track how many hits come from browsers where JavaScript has been disabled.'; 
document.getElementsByTagName('head')[0].appendChild(m);
document.write('ddddddd');
</script>

<?php
/**
     * Retrieve model object
     *
     * @link    Mage_Core_Model_Config::getModelInstance
     * @param   string $modelClass
     * @param   array $arguments
     * @return  Mage_Core_Model_Abstract
     */
?>

<?php
class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {        
    
    public static function getModel($modelClass = '', $arguments = array())
    {
        return self::getConfig()->getModelInstance($modelClass, $arguments);
    }
    
    public function indexAction() {
        /* @var $customerForm Mage_Customer_Model_Form */
        $customerForm = Mage::getModel('catalog/product');
        //$customerForm->load(2)->
        echo 'Hello Index!';
		?>
		<form action='http://localhost/clikaroo/index.php/helloworld/index/post' method='post' id='form'>
			<input name='a' type='text' value='oayyy...' />
			<div id='popup' style="display:none;width:200px;height:200px;background-color:green;">
				<input type='text' name='b' />
				<button id='btnOk'>Ok</button>
			</div>
			<input type='submit' />
		</form>
		<?php
    }
	
	public function postAction() {
	//	echo $_POST['a'] . " - " . $_POST['b'];
		echo "boooooooooooooo";
	}
	
	public function createproductsAction() {
		/*
		Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
		$product = Mage::getModel('catalog/product');
		//    if(!$product->getIdBySku('testsku61')):
		
		try{
		$product
			->setStoreId(0) //you can set data in store scope
			->setWebsiteIds(array(1)) //website ID the product is assigned to, as an array
			->setAttributeSetId(4) //ID of a attribute set named 'default'
			->setTypeId('simple') //product type
			->setCreatedAt(strtotime('now')) //product creation time
		//    ->setUpdatedAt(strtotime('now')) //product update time
		
			->setSku('testsku61') //SKU
			->setName('test product21') //product name
			->setWeight(4.0000)
			->setStatus(1) //product status (1 - enabled, 2 - disabled)
			->setTaxClassId(4) //tax class (0 - none, 1 - default, 2 - taxable, 4 - shipping)
			->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH) //catalog and search visibility
			->setManufacturer(28) //manufacturer id
			->setColor(24)
			->setNewsFromDate('06/26/2014') //product set as new from
			->setNewsToDate('06/30/2014') //product set as new to
			->setCountryOfManufacture('AF') //country of manufacture (2-letter country code)
		 
			->setPrice(11.22) //price in form 11.22
			->setCost(22.33) //price in form 11.22
			->setSpecialPrice(00.44) //special price in form 11.22
			->setSpecialFromDate('06/1/2014') //special price from (MM-DD-YYYY)
			->setSpecialToDate('06/30/2014') //special price to (MM-DD-YYYY)
			->setMsrpEnabled(1) //enable MAP
			->setMsrpDisplayActualPriceType(1) //display actual price (1 - on gesture, 2 - in cart, 3 - before order confirmation, 4 - use config)
			->setMsrp(99.99) //Manufacturer's Suggested Retail Price
		 
			->setMetaTitle('test meta title 2')
			->setMetaKeyword('test meta keyword 2')
			->setMetaDescription('test meta description 2')
		 
			->setDescription('This is a long description')
			->setShortDescription('This is a short description')
		 
			->setMediaGallery (array('images'=>array (), 'values'=>array ())) //media gallery initialization
			->addImageToMediaGallery('media/catalog/product/1/0/10243-1.png', array('image','thumbnail','small_image'), false, false) //assigning image, thumb and small image to media gallery
		 
			->setStockData(array(
							   'use_config_manage_stock' => 0, //'Use config settings' checkbox
							   'manage_stock'=>1, //manage stock
							   'min_sale_qty'=>1, //Minimum Qty Allowed in Shopping Cart
							   'max_sale_qty'=>2, //Maximum Qty Allowed in Shopping Cart
							   'is_in_stock' => 1, //Stock Availability
							   'qty' => 999 //qty
						   )
			)
		 
			->setCategoryIds(array(3, 10)); //assign product to categories
		$product->save();
		//endif;
		}catch(Exception $e){
			echo ($e->getMessage());
		}
		*/
		
		$vendor_name = "vendor";
		$product = Mage::getModel('catalog/product');		
		
		$product->setWebsiteIds(array(2)) //website ID the product is assigned to, as an array
			->setAttributeSetId(4) //ID of a attribute set named 'default'
			->setTypeId('virtual') //product type
			->setCreatedAt(strtotime('now')) //product creation time
			->setSku('deal-'.time()) //SKU
			->setName($vendor_name ) //product name
			->setWeight(1)
			->setStatus(1) //product status (1 - enabled, 2 - disabled)
			->setTaxClassId(0) //tax class (0 - none, 1 - default, 2 - taxable, 4 - shipping)
			->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH) //catalog and search visibility
			->setPrice($price) //price in form 11.22
			->setSpecialPrice($price) //price in form 11.22
			->setMsrpEnabled(1) //enable MAP
			->setMsrpDisplayActualPriceType(1) //display actual price (1 - on gesture, 2 - in cart, 3 - before order confirmation, 4 - use config)
			->setMetaTitle($vendor_name )
			->setMetaKeyword($vendor_name )
			->setMetaDescription($vendor_name )
			->setDescription($vendor_name )
			->setShortDescription($vendor_name )
			->setMediaGallery (array('images'=>array (), 'values'=>array ())) //media gallery initialization
		    ->addImageToMediaGallery('media/'.$_vendor->getData("logo"), array('image','thumbnail','small_image'), false, false) //assigning image, thumb and small image to media gallery
			->setStockData($pData['stock_data'])
			->setCategoryIds(array(86))
			->save();    
		
		$productId = $product->getId();
		
		//add description/short description
		$updateAttributes = array();
		$updateAttributes['description'] = $product->getGroupdealFineprint();
		$updateAttributes['short_description'] = $product->getGroupdealHighlights();	 		
		//if logged in as merchant and require administrators approval set deal status to pending
		
		$updateAttributes['status'] = 1;
		$updateAttributes['groupdeal_status'] = Devinc_Groupdeals_Model_Source_Status::STATUS_RUNNING;
		
		Mage::getSingleton('catalog/product_action')->updateAttributes(array($product->getId()), $updateAttributes, $storeId);
		
	}
}
?>