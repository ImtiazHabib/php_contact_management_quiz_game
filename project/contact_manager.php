<?php 
 /*
   Project 1: Terminal-Based Contact Management App
    Functional Requirements:
    App must show a menu with:
    Add Contact
    View Contacts
    Exit
    Allow adding up to two contacts only (stored using two sets of individual variables).
    Each contact includes:
    Name
    Phone Number
    If 2 contacts are already saved, show a warning message when trying to add another.
    "View Contacts" should list the saved contacts with their name and phone.
 */

 //Project Start ====

//  Contact imformations save

// contact One 
$contact_one_name ="";
$contact_one_password = "";

// contact two 
$contact_two_name ="";
$contact_two_password = "";

//   showing Menu on the Terminal 
while(true){
    echo "\n ========== Welcome to Contact Management App =========== \n";
    echo "1. Add Contact \n" . "2. View Contacts \n" . "3. Exit \n" ;

    echo " Enter Your Choice \n";
    $user_choice = fgets(STDIN);

    if($user_choice == 1){
      // Add Contact
      if($contact_one_name == ''){

        echo " Enter Contact One Name  \n";
        $contact_one_name =fgets(STDIN);
        echo " Enter Contact One  Password \n";
        $contact_one_password =fgets(STDIN);

      }elseif($contact_two_name == ''){

        echo " Enter Contact two Name  \n";
        $contact_two_name =fgets(STDIN);
        echo " Enter Contact two  Password \n";
        $contact_two_password =fgets(STDIN);

      }elseif(($contact_one_name != '')  && ($contact_two_name != '') ){
        echo "Warning === DATABASE full . You Can not enter any contact . Thank you.... \n";
      }
    }elseif($user_choice == 2){
      // View Contact
      if(($contact_one_name != '')  && ($contact_two_name != '')){
        echo "Contact One name and Password === \n";
        echo $contact_one_name ."(name)\n" . $contact_one_password. "(password)\n";
        echo "\n=======================\n";
        echo "Contact Two  name and Password === \n";
        echo $contact_two_name ."(name)\n" . $contact_two_password. "(password)\n";
      }elseif(($contact_two_name == "") && ($contact_one_name != '') ){
        echo "Contact One name and Password === \n";
        echo $contact_one_name ."(name)\n" . $contact_one_password. "(password)\n";
        echo " Contact Two Empty \n";
      }elseif(($contact_two_name == "") && ($contact_one_name == '')){
        echo "\n===== There is no Contact Available ========== \n";
      }
    }elseif($user_choice == 3){
        echo "GoodBye 😊";
        break;
    }
  
}

// Project End 
?>