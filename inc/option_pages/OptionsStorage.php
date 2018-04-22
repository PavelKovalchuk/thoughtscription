<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 14.01.2018
 * Time: 11:03
 */
 class OptionsStorage {

    protected $generalSubpages = array(
	    array(
		    'page_title'	=> 'Thoughtscription Options',
		    'menu_title'	=> 'Thoughtscription Options',
		    'capability'	=> 'manage_options',
		    'menu_slug'		=> 'thoughtscription_options',
		    'icon_url'		=> 'dashicons-editor-code',
		    'position'		=> 101,
		    'sections'		=> array(
			    //			A new section
			   array(
				    'id'	=> 'general_custom_data_id',
				    'title'	=> 'Empty page',
				    'fields'		=> array(
					    //					A new field

				    ),
			    ),

		    ),
		    'subpages'		=> array(),
	    )
    );

	 /**
	  * @return array
	  */
	 public function getGeneralSubpages() {
		 return $this->generalSubpages;
	 }

	 /**
	  * @param array $general_subpage_arr
	  */
	 public  function addSubpageToPromxOptionPages( $general_subpage_arr ) {
		 $this->generalSubpages[0]['subpages'][] = $general_subpage_arr;
	 }




}