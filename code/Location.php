<?php

class Location extends DataObject {

	static $db = array(
		'Title' => 'Varchar(255)',
		'Website' => 'Varchar(255)',
		'Phone' => 'Varchar(40)',
		'Fax' => 'Varchar(40)',
		'EmailAddress' => 'Varchar(255)',
		'ShowInLocator' => 'Boolean',
	);
	
	static $has_one = array(
		'Category' => 'LocationCategory'
	);
		
	static $casting = array(
		'distance' => 'Int'
	);
	
	static $default_sort = 'Title';

	static $defaults = array(
		'ShowInLocator' => true
	);

	// api access
	//static $api_access = true;
	
	static $summary_fields = array(
		'Title',
		'Address',
		'Suburb',
		'State',
		'Postcode',
		'Country'
	);	

	function fieldLabels($includerelations = true) {
     	$labels = parent::fieldLabels();

     	$labels['Title'] = 'Name';
     	$labels['Suburb'] = "City";
     	$labels['Postcode'] = 'Postal Code';
     	$labels['ShowInLocator'] = 'Show';

     	return $labels;
   	}
 
	/*
	public function getCMSFields() {
		
		$fields = parent::getCMSFields();
		
		$fields->addFieldsToTab('Root.Main', array(
			TextField::create('Title'),
			TextField::create('Website'),
			TextField::create('Phone'),
			TextField::create('Fax'),
			TextField::create('EmailAddress'),
			CheckboxField::create('ShowInLocator')
		));
		
		$fields->addFieldsToTab('Root.Category', array(
			GridField::create('Categories', 'Category', $this->Categories(), GridFieldConfig_RelationEditor::create())
		));
		
		return $fields;
	}
	*/
			
}