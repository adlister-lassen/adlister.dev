<?php

require_once __DIR__ . '/Model.php';

class Ad extends Model {

	protected static $table = 'ads';
	protected static $featuredAds = 3;

	public static function findFeaturedItems()
    {

    	self::dbConnect();

    	$query = 'SELECT * FROM ' . self::$table . ' ORDER BY ad_views DESC LIMIT ' . self::$featuredAds;

    	$stmt = self::$dbc->prepare($query);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }



    public function getNumberOfAds($dbc)
    {
        $stmt = $dbc->query('SELECT COUNT(*) FROM '.$table.';');
        return $stmt->fetchColumn();
    }

    public function getMaxPageNumber($dbc, $limit)
    {
        $number_of_ads = getNumberOfAds($dbc);
        return ceil($number_of_ads / $limit);
    }

    public function calculateOffset($page_number, $limit)
    {
        return (($limit * $page_number) - $limit);
    }

    public function getAds($dbc, $page_number, $limit)
    {
        $ads_query = 'SELECT * FROM '.$table.' LIMIT :limit OFFSET :offset;';

        $offset = calculateOffset($page_number, $limit);

        $stmt = $dbc->prepare($ads_query);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function indexOfAds()
    {   
        $adHtml = '';
        $ads = self::all();
        var_dump($ads);
        foreach($ads as $adArray){
            foreach ($adArray as $ad => $value) {
            $adHtml .= '<div class="col-md-3 col-sm-4">';
            $adHtml .= '<div class="product">';
            $adHtml .= '<div class="image">';
            $adHtml .= '<a href="/ads/show?id="'.$ad['id'].'">';
            $adHtml .= '<img src="'.$ad['image_url'].'" alt="" class="img-responsive image1"></a></div><!-- /.image -->';
            $adHtml .= '<div class="text">';
            $adHtml .= '<h3><a href="/ads/show?id="'.$ad['id'].'"><'.$ad['name'].'</a></h3>';
            $adHtml .= '<p class="price">$'.$ad['price'].'</p>';
            $adHtml .= '<p class="buttons"><a href="/ads/show?id='.$ad['id'].'" class="btn btn-default">View detail</a></p>';
            $adHtml .= '</div><!-- /.text -->';
            $adHtml .= '</div><!-- /.product --></div>';

            }
        }
                
                    
                        
                            
                                
                            
                        
                        
                        
                            
                            
                            
                                
                            
                        
                        
                    
                    
                
          
    }








}

?>