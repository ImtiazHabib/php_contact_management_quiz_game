<?php 
/*
Project 2: Terminal-Based Quiz Application
Functional Requirements:
App must show one question at a time, each with 3 options (a/b/c).
Minimum 3 questions required.
For each question:
Take input from user
Show whether the answer was correct or not
At the end, display the final score (e.g., "You got 2 out of 3").
*/

// Project Start
echo "===== Welcome to Quiz Game. Answer 4 Questions. Check your score. ==== \n ";

$score_value = 0;
$question_number =1;

while($question_number<=4){
    if($question_number == 1){
        echo "Question 1 == Who is the prime minister of bangladesh \n";
       echo "a. Sheikh Hasina 😂 \n" . "b. Tarek Jia \n" . "c. DR. Younus .❤ \n" ;
        // Taking Input 
        $user_input =fgets(STDIN);
        $user_answer = trim($user_input);
       if($user_answer == 'c'){
        echo " You have Answered Correct \n";
        //increment score
        $score_value++;
       }else{
        echo " The correct Answer is c. DR. Younus \n";
       }
    }elseif($question_number == 2){
        echo "Question 2 == What is The capital of Germany \n";
       echo "a. Berlin \n" . "b. Paris \n" . "c. Dhaka \n" ;
        // Taking Input 
        $user_input =fgets(STDIN);
        $user_answer = trim($user_input);
       if($user_answer == 'a'){
        echo " You have Answered Correct \n";
        //increment score
        $score_value++;
       }else{
        echo " The correct Answer is a. Berlin \n";
       }
    }elseif($question_number == 3){
        echo "Question 3 == Which Football team Won 2022 World Cup \n";
       echo "a. Brazil \n" . "b. France \n" . "c. Argentina ❤ \n" ;
        // Taking Input 
        $user_input =fgets(STDIN);
        $user_answer = trim($user_input);
       if($user_answer == 'c'){
        echo " You have Answered Correct \n";
        //increment score
        $score_value++;
       }else{
        echo " The correct Answer is c. Argentina ❤ \n";
       }
    }elseif($question_number == 4){
        echo "Question 4 == Which is the CMS of PHP \n";
       echo "a. WordPress \n" . "b. wix \n" . "c. Bootstrap  \n" ;
        // Taking Input 
        $user_input =fgets(STDIN);
        $user_answer = trim($user_input);
       if($user_answer == 'a'){
        echo " You have Answered Correct \n";
        //increment score
        $score_value++;
       }else{
        echo " The correct Answer is a. WordPress \n";
       }
    }

    $question_number++;
}

echo "=========== End Game ========= \n";
if($score_value == 4){
    echo " \n************** You Are Brilliant  **************\n";
}
echo " You got $score_value out of 4 ";
// Project End 

?>