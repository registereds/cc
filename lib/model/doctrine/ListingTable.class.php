<?php

class ListingTable extends Doctrine_Table {

 
    /**
     * Return a Doctrine_Query object for retrieving active listings
     *
     * @param Doctrine_Query $q
     * @return Doctrine_Query
     */
    public function getActiveListingsQuery(Doctrine_Query $q = null) {
        if (is_null($q)) {
            $q = Doctrine_Query::create ()->from('Listing l')->addSelect('l.*')->leftJoin('l.Category c')->addSelect('c.*')->leftJoin('l.User u')->addSelect('u.*')->leftJoin('l.ListingComments lc')->addSelect('lc.*')->leftJoin('l.ListingImages li')->addSelect('li.*');
        }
        $alias = $q->getRootAlias();
        //$q->andWhere ( $alias . '.expires_at > ?', date ( 'Y-m-d H:i:s', time () ) )->addOrderBy ( $alias . '.created_at DESC' );
        return $q;
    }

    /**
     * Returns the pager object for showing active listings
     *
     * @param int $page the current page
     * @return sfDoctrinePager  the pager object
     */
    public function getActiveListingsPager($page = 1, $query = null) {
        $pager = new sfDoctrinePager('Listing', sfConfig::get('app_category_listings_per_page'));

        if (!is_null($query)) {
            $pager->setQuery($query);
        } else {
            $pager->setQuery($this->getActiveListingsQuery());
        }
        $pager->setPage($page);
        $pager->init();

        return $pager;
    }

    public function getActiveListingsSearchPager($keyword, $page = 1, $query = null) {


        $keyword = strtolower(trim($keyword));
        $keyword = preg_replace('@\s+@', ' ', $keyword);
        $keyword = preg_replace('@\W@', ' ', $keyword);
        $keywords = explode(' ', $keyword);

        if (!is_null($query)) {
            $q = $query;
        } else {
            $q = $this->getActiveListingsQuery();
        }


        $q = $q->leftJoin('l.ListingTags lt')->addSelect('lt.*')->addSelect('SUM(lt.weight) as score');

        $tempArray = array_fill(0, count($keywords), ' lt.text = ? ');
        $q = $q->addWhere('(' . implode(' OR ', $tempArray) . ')', array_values($keywords));

        $q = $q->groupBy('lt.listing_id')->orderBy('score DESC');

        $pager = new sfDoctrinePager('Listing', sfConfig::get('app_category_listings_per_page'));

        $pager->setQuery($q);
        $pager->setPage($page);

        $pager->init();

        return $pager;
    }

    public function getActiveListingsSearchCountGroupByCategory($keyword) {
        $keyword = strtolower(trim($keyword));
        $keyword = preg_replace('@\s+@', ' ', $keyword);
        $keyword = preg_replace('@\W@', ' ', $keyword);
        $keywords = explode(' ', $keyword);
        $func = create_function('$txt', 'return "\'".addslashes($txt)."\'";');
        $keywords = array_map($func, $keywords);
        $sql = "SELECT listing.category_id AS id, COUNT( DISTINCT listing.id ) as count FROM listing, listing_index WHERE listing.id = listing_index.id AND listing_index.keyword in (" . (implode(' OR ', $keywords)) . ") GROUP BY listing.category_id";
        $doctrine = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();
        $stmt = $doctrine->query($sql);

        $result = array();
        if ($stmt) {
            while ($row = $stmt->fetch()) {
                $result[$row['id']] = $row['count'];
            }
        }
        return $result;
    }

    /**
     * This function is used by the routing system
     *
     * @param array $parameters
     * @return Listing 
     */
    public function getById($parameters) {
        return $this->find($parameters ['id']);
    }

    /**
     * Return the listings post by given user
     * @param int $userId
     * @return  Coll/Array
     */
    public function getByUserId($userId, Doctrine_Query $q = null) {

        if (is_null($q)) {
            $q = Doctrine_Query::create ()->from('Listing l')->addWhere('l.user_id=' . $userId)->or > orderBy('l.created_at DESC');
        }

        return $q->execute();
    }


    
    /**
     * Majorly updating the expired status for listings
     * @return  int Number of listings updated
     */
    public function updateStatus() {

        $q = Doctrine_Query::create ()->update('Listing l')->set('l.status', '?', Listing::STATUS_INACTIVE)->where('l.expires_at > ?', date ( 'Y-m-d H:i:s', time () ));
         
        $rows = $q->execute();
        return $rows;
    }

}
