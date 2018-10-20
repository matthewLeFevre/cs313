<?php 

require_once './src/include.php';

/**
 * User
 * 
 *  The user Controller handles
 *  all authentication based actions
 *  that can be performed on user accounts
 *  for the application.
 * 
 *  @todo implement a way to check if the client is loggedin
 *  @todo implement a way to logout and destroy a token
 *  @todo add an action to delete a user
 *  @todo add an action to update user info
 *  @todo add an action to update a user password
 */

$user = new Controller('user');


/**
 * Login User // Retest
 * --------------
 * 
 *  Requires:
 *  @var string userPassword
 *  @var string userEmail
 * 
 * Notes:
 *  @todo Retest this action
 *  @todo Enable $userPasswordCheck in production
 */
$user->addAction('loginUser', 

  function($payload){

    $filterLoad = Controller::filterPayload($payload);
                  Controller::required(['userEmail', 'userPassword'], $filterLoad);

    $userPassword = $filterLoad['userPassword'];
    $userEmail    = $filterLoad['userEmail'];
    $userEmail    = checkEmail($userEmail);
    // $userPasswordCheck = checkPassword($userPassword); uncomment befor production and test

    $userData  = get_user_by_email($userEmail);
    $hashCheck = password_verify($userPassword, $userData['userPassword']);

    // throw error wrong password
    if (!$hashCheck) {
      return Response::err("Your password or username is incorrect.");
      exit;
    }

    if($GLOBALS['user']->getTokenValidation()) {
      $userData['apiToken'] = generateJWT($userData["userId"]);
    }
    
    return Response::data($userData, 'User successfully logged in.');

});

/**
 * Register User // Retest
 * --------------
 * 
 *  Requires:
 *  @var string userPassword
 *  @var string userEmail
 *  @var string userName
 * 
 * Notes:
 *  @todo Make the registration proccess more verbose and secure
 *  by requireing a captcha or something to ward off crawling
 *  registering malware
 */
$user->addAction('registerUser', 

  function($payload){

    $filterLoad = Controller::filterPayload($payload);
                  Controller::required(['userName', 'userEmail', 'userPassword'], $payload);

    // Ensure that password and email are valid and clean
    $filterLoad['userEmail'] = checkEmail($payload['userEmail']);
    // $userEmailVerify = verify_email($filterLoad['userEmail']);

    function get_all_users() {
      $db = dbConnect();
      $sql = 'SELECT * FROM "user"';
      $stmt = $db->prepare($sql);
      $stmt->execute();
      $data = $stmt->fetchAll(PDO::FETCH_NAMED);
      $stmt->closeCursor();
    return $data;
    }

   

    // Throw error that entered email address already exists
    if($userEmailVerify){
      return Response::err("An account with that email address already exists please try logging in or using a different email.");
      exit;
    }

    // hash the password before putting it into the database
    $filterLoad['userPassword'] = password_hash($filterLoad['userPassword'], PASSWORD_DEFAULT);
    $newRegistrationStatus = register_new_user($filterLoad);

    // create custom notification that registration was successful
    if($newRegistrationStatus) {
      var_dump(get_all_users());
      exit;
      // return Response::success($filterLoad['userName'] . " account created successfully. Please login to access your account.");
      // exit;
    }

});