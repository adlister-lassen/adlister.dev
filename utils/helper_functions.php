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

function createOrEditUser(){
    $errors = [];
    $name;
    $email;
    $username;
    $password;

    //check for empty fields
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']))
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

    } elseif(Input::has('name') && Input::has('email') && Input::has('username') && Input::has('password'))
    
    //if everthing is filled in validate every entry
    {
        try {
            $name = Input::getString('name');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $email = Input::getString('email');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $username= Input::getString('username');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $password = Input::getString('password');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        
        if (empty($errors)) {

            $user = new User();
            if (Input::has('name')) {
                $user->id = Input::get('id');
            }
            $user->name = $name;
            $user->email = $email;
            $user->username = $username;
            $user->password = $password;
            $user->save();
           
           //redirect to user account after user creation
            if (!Input::has('id')){
                //set session to show as logged in
                $_SESSION['IS_LOGGED_IN'] = $user->username;
                $_SESSION['LOGGED_IN_ID'] = $user->id;

                //redirect to user account
                header('Location: /users/account?id='.$user->id);
                die(); 
            }
        }

    } 
    return $errors;

} 

function createOrEditAd(){
    $errors = [];
    $user_id = $_SESSION['LOGGED_IN_ID'];
    $name;
    $description;
    $price;
    $image_url;
    $date_created = date("d/m/Y");
    $ad_views=0;

    //check for empty fields
    if (empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_POST['image_url']))
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

    } elseif(Input::has('name') && Input::has('description') && Input::has('price') && Input::has('image_url'))
    
    //if everthing is filled in validate every entry
    {
        try {
            $name = Input::getString('name');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $description = Input::getString('description');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $price= Input::getNumber('price');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        try {
            $image_url = Input::getString('image_url');
        }catch (Exception $e) {
            $errors[] = $e->getMessage();
        }
        
        if (empty($errors)) {

            $ad = new Ad();
            if (Input::has('name')) {
                $ad->id = Input::get('id');
            }
            $ad->user_id = $user_id;
            $ad->name = $name;
            $ad->description = $description;
            $ad->price = $price;
            $ad->image_url = $image_url;
            $ad->date_created = $date_created;
            $ad->ad_views = $ad_views;
            $ad->save();
           
           //redirect to user account after ad creation
            if (!Input::has('id')){
                header('Location: /users/account');
                die(); 
            }
        }

    } 
    return $errors;

} 

function findAdOrRedirect()
{
    $ad = Ad::find(Input::get('id'));
    if ($ad == null) {
        header('Location: /ads');
        die();
    }

    return $ad;
}

function findUserOrRedirect()
{
    $user = User::find(Input::get('id'));
    if ($user == null) {
        header('Location: /');
        die();
    }

    return $user;
}



function getNumberOfAds($dbc)
{
    $stmt = $dbc->query('SELECT COUNT(*) FROM ads;');
    return $stmt->fetchColumn();
}

function getMaxPageNumber($dbc,$limit)
{
    $number_of_ads = getNumberOfAds($dbc);
    return ceil($number_of_ads / $limit);
}

function calculateOffset($page_number,$limit)
{
    return (($limit * $page_number) - $limit);
}

function getAds($dbc, $page_number,$limit)
{

    $ads_query = 'SELECT * FROM ads LIMIT :limit OFFSET :offset;';

    $offset = calculateOffset($page_number, $limit);

    $stmt = $dbc->prepare($ads_query);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
        

function getPageNumber($max_page_number)
{
    $page_number = Input::getNumber('page', 1);
    if ($page_number > $max_page_number) {
        $page_number = $max_page_number;
    } else if ($page_number < 1) {
        $page_number = 1;
    }

    return $page_number;
}





