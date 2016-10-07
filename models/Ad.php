<?php

require_once __DIR__ . '/Model.php';

class Ad extends Model {

	protected static $table = 'ads';
	protected static $featuredAds = 3;
    protected static $limit = 6;

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

    public static function findSellersItems()
    {

        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' AS a JOIN users AS u ON u.id = a.user_id WHERE u.id = '.$_SESSION['LOGGED_IN_ID'].'ORDER BY a.date_created';


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

}

?>