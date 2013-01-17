<?php

/**
 * Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    campuscenter
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6508 2009-10-14 06:28:49Z jwage $
 */
class Category extends BaseCategory
{
	
	/**
	 * Returns Doctrine_Query instance for retrieving active listings in this category
	 *
	 * @return Doctrine_Query
	 */
	public function getActiveListingsQuery(){
		$q = Doctrine::getTable('Listing')->getActiveListingsQuery()->addWhere('l.category_id = ?', $this['id']);
		return $q;
	}
	
	/**
	 * Returns the pager object for showing active listings
	 *
	 * @param int $page the current page
	 * @return sfDoctrinePager  the pager object
	 */
	public function getActiveListingsPager($page=1){
		$pager = new sfDoctrinePager( 'Listing', sfConfig::get('app_category_listings_per_page')); 
		$pager->setQuery($this->getActiveListingsQuery()); 
		$pager->setPage($page); 
		$pager->init();
		
		return $pager;
	}


	/**
	 * Returns the pager object for showing searched active listings
	 *
	 * @param int $page the current page
	 * @param string $kw the current search keyword
	 * @return sfDoctrinePager  the pager object
	 */
	public function getActiveListingsSearchPager( $keyword, $page=1){
		$q = $this->getActiveListingsQuery();
                return  Doctrine::getTable('Listing')->getActiveListingsSearchPager($keyword, $page, $q);
                
	}
	
	/**
	 * Returns the image tag for this category
	 * Note: return requires HTML decode when used in template
	 *
	 * @return string
	 */
	public function imageTag(){
		return image_tag('category/'.$this['slug'], array('title'=>$this['name']));
	}
	
	public function thumbTag(){
		return image_tag('category/'.$this['slug'], array( 'width'=>'20' , 'height'=>'20', 'title'=>$this['name']));
		
	}
	
	
	public function getHTMLAnchor($option=array() ){
		
		return link_to($this['name'], 'category', array( 'sf_subject' => $this, 'module'=>$this->getModule()), $option);
	}
	
}