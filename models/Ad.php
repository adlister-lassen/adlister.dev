<?php

require_once __DIR__ . '/Model.php';

class Ad extends Model {

	protected static $table = 'ads';


    // finds and returns instance of all ads by a seller
    public static function findByAdsBySeller($id)
    {

        self::dbConnect();

        $query = 'SELECT a.id, a.name, a.price, a.date_created, a.ad_views 
                    FROM ' . self::$table . ' AS a JOIN users AS u ON a.user_id = u.id WHERE u.id = :id';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

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