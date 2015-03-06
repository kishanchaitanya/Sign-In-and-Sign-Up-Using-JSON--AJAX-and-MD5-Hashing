<?php
	include_once('db.php');

	$firstname = $_POST['firstName'];
	$lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $dobTime = $_POST['dobTime'];
    $localdob = $_POST['localdob'];
    $ssn = $_POST['ssn'];
    $phonenumber = $_POST['phone'];
    $creditcardnumber = $_POST['creditCardNumber'];

    $json = array(
        'jsonFirstName' => md5($_POST['firstName']),
        'jsonLastName' => md5($_POST['lastName']),
        'jsonEmail' => md5($_POST['email']),
        'jsonPassword' => md5($_POST['password']),
        'jsonDob' => $_POST['dob'],
        'jsonDobTime' => $_POST['dobTime'],
        'jsonLocaldob' => $_POST['localdob'],
        'jsonSsn' => $_POST['ssn'],
        'jsonPhonenumber' => $_POST['phone'],
        'jsonCreditcardnumber' => $_POST['creditCardNumber']
    );


    $result = json_encode($json);

    extract(json_decode($result, true));

    $jsonfirstname = $jsonFirstName;
    $jsonlastname = $jsonLastName;
    $jsonemail = $jsonEmail;
    $jsonpassword = $jsonPassword;
    $jsondob = $jsonDob;
    $jsondobTime = $jsonDobTime;
    $jsonlocaldob = $jsonLocaldob;
    $jsonssn = $jsonSsn;
    $jsonphonenumber = $jsonPhonenumber;
    $jsoncreditcardnumber = $jsonCreditcardnumber;
    
	if(mysql_query("INSERT INTO user VALUES('$jsonfirstname', '$jsonlastname', '$jsonemail', '$jsonpassword', '$jsondob', '$jsondobTime', '$jsonlocaldob', '$jsonssn','$jsonphonenumber','$jsoncreditcardnumber')")){
		echo "Successfully Inserted";
    }
        
	else
		echo "Fail to Insert";

?>