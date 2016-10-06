<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{
    $valid = true;
    // checks if $input_name is in the files super global
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {
        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$input_name]['error'])
        {
            $tempFile = $_FILES[$input_name]['tmp_name'];
            $positionOfLastSlash = strrpos($tempFile, '/');
            $newName = substr($tempFile, $positionOfLastSlash);
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            // Validate Size and Extension
            if( $_FILES[$input_name]['size'] > (1024000000))
            {
                $valid = false;
            }
            // only allows certain file extensions
            if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
            {
                $valid  = false;
            }
            // If Image file makes it to this point, send file to this directory
            if($valid)
            {
                $image_url = '/img/uploads' . $newName . '.' . $extension;
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
                return $image_url;
            }
            else
            {
                return null;
            }
        }
    } else {
        return null;
    }
}


function createAd($dbc){
    $errors = [];
    $user_id = $_SESSION['IS_LOGGED_IN'];
    $name;
    $description;
    $price;
    $img_url;
    $date_created = date(d-m-Y);
    $ad_views=0;

    //check for empty fields
    if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_POST['img_url']))
    {
        try{
            foreach ($_POST as $key => $value) {
                if (empty($_POST[$key])) {
                    throw new Exception("$key Field is empty");
                } 
            }

        } catch (Exception $e) {
            $errors[] = $e->getMessage();
        }

    } elseif(Input::has('name') && Input::has('description') && Input::has('price') && Input::has('img_url'))
    
    //if everthing is filled in validate every entry
    {
        try {
            $name = Input::getString('name');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $location = Input::getString('description');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $date= Input::getNumber('price');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $description = Input::getString('img_url');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        
        if (empty($errors)) {

            $query = 'INSERT INTO ads (user_id, name, description, price, img_url, date_created, ad_views) VALUES (:user_id, :name, :description, :price, :img_url, :date_created, :ad_views)';

            $stmt = $dbc->prepare($query);

            $stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
            $stmt->bindValue(':name', $name, PDO::PARAM_STR);
            $stmt->bindValue(':description', $description, PDO::PARAM_STR);
            $stmt->bindValue(':price', $price, PDO::PARAM_STR);
            $stmt->bindValue(':img_url', $img_url, PDO::PARAM_STR);
            $stmt->bindValue(':date_created', $date_created, PDO::PARAM_STR);
            $stmt->bindValue(':ad_views', $ad_views, PDO::PARAM_STR);

            $stmt->execute();
            header('Location: /users/account');
            die();
        }

    } 

    return $errors;

} 
