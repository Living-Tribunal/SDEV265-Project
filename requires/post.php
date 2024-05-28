<?php

try {
    $db = new PDO($dns);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
    $category_one = '';
  
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
      /* <------ category title --------> */
      $game_title = isset($_POST['game_title']) ? htmlspecialchars(trim($_POST['game_title'])): '';
  
      /* <------ category headers --------> */
      $category_one = isset($_POST['row_one_col_one']) ? htmlspecialchars(trim($_POST['row_one_col_one'])): '';
      $category_two = isset($_POST['row_one_col_two']) ? htmlspecialchars(trim($_POST['row_one_col_two'])): '';
      $category_three = isset($_POST['row_one_col_three']) ? htmlspecialchars(trim($_POST['row_one_col_three'])): '';
      $category_four = isset($_POST['row_one_col_four']) ? htmlspecialchars(trim($_POST['row_one_col_four'])): '';
      $category_five = isset($_POST['row_one_col_five']) ? htmlspecialchars(trim($_POST['row_one_col_five'])): '';
      $category_six = isset($_POST['row_one_col_six']) ? htmlspecialchars(trim($_POST['row_one_col_six'])): '';
      
      /* <------ questions for 200 --------> */
      $question_200_1 = isset($_POST['question_200_1']) ? htmlspecialchars(trim($_POST['question_200_1'])) : '';
      $question_200_2 = isset($_POST['question_200_2']) ? htmlspecialchars(trim($_POST['question_200_2'])) : '';
      $question_200_3 = isset($_POST['question_200_3']) ? htmlspecialchars(trim($_POST['question_200_3'])) : '';
      $question_200_4 = isset($_POST['question_200_4']) ? htmlspecialchars(trim($_POST['question_200_4'])) : '';
      $question_200_5 = isset($_POST['question_200_5']) ? htmlspecialchars(trim($_POST['question_200_5'])) : '';
      $question_200_6 = isset($_POST['question_200_6']) ? htmlspecialchars(trim($_POST['question_200_6'])) : '';
      
      /* <------ answers for 200 --------> */
      $answer_200_1 = isset($_POST['answer_200_1']) ? htmlspecialchars(trim($_POST['answer_200_1'])) : '';
      $answer_200_2 = isset($_POST['answer_200_2']) ? htmlspecialchars(trim($_POST['answer_200_2'])) : '';
      $answer_200_3 = isset($_POST['answer_200_3']) ? htmlspecialchars(trim($_POST['answer_200_3'])) : '';
      $answer_200_4 = isset($_POST['answer_200_4']) ? htmlspecialchars(trim($_POST['answer_200_4'])) : '';
      $answer_200_5 = isset($_POST['answer_200_5']) ? htmlspecialchars(trim($_POST['answer_200_5'])) : '';
      $answer_200_6 = isset($_POST['answer_200_6']) ? htmlspecialchars(trim($_POST['answer_200_6'])) : '';
  
      /* <------ questions for 400 --------> */
      $question_400_1 = isset($_POST['question_400_1']) ? htmlspecialchars(trim($_POST['question_400_1'])) : '';
      $question_400_2 = isset($_POST['question_400_2']) ? htmlspecialchars(trim($_POST['question_400_2'])) : '';
      $question_400_3 = isset($_POST['question_400_3']) ? htmlspecialchars(trim($_POST['question_400_3'])) : '';
      $question_400_4 = isset($_POST['question_400_4']) ? htmlspecialchars(trim($_POST['question_400_4'])) : '';
      $question_400_5 = isset($_POST['question_400_5']) ? htmlspecialchars(trim($_POST['question_400_5'])) : '';
      $question_400_6 = isset($_POST['question_400_6']) ? htmlspecialchars(trim($_POST['question_400_6'])) : '';
      
      /* <------ answers for 400 --------> */
      $answer_400_1 = isset($_POST['answer_400_1']) ? htmlspecialchars(trim($_POST['answer_400_1'])) : '';
      $answer_400_2 = isset($_POST['answer_400_2']) ? htmlspecialchars(trim($_POST['answer_400_2'])) : '';
      $answer_400_3 = isset($_POST['answer_400_3']) ? htmlspecialchars(trim($_POST['answer_400_3'])) : '';
      $answer_400_4 = isset($_POST['answer_400_4']) ? htmlspecialchars(trim($_POST['answer_400_4'])) : '';
      $answer_400_5 = isset($_POST['answer_400_5']) ? htmlspecialchars(trim($_POST['answer_400_5'])) : '';
      $answer_400_6 = isset($_POST['answer_400_6']) ? htmlspecialchars(trim($_POST['answer_400_6'])) : '';
  
      /* <------ questions for 600 --------> */
      $question_600_1 = isset($_POST['question_600_1']) ? htmlspecialchars(trim($_POST['question_600_1'])) : '';
      $question_600_2 = isset($_POST['question_600_2']) ? htmlspecialchars(trim($_POST['question_600_2'])) : '';
      $question_600_3 = isset($_POST['question_600_3']) ? htmlspecialchars(trim($_POST['question_600_3'])) : '';
      $question_600_4 = isset($_POST['question_600_4']) ? htmlspecialchars(trim($_POST['question_600_4'])) : '';
      $question_600_5 = isset($_POST['question_600_5']) ? htmlspecialchars(trim($_POST['question_600_5'])) : '';
      $question_600_6 = isset($_POST['question_600_6']) ? htmlspecialchars(trim($_POST['question_600_6'])) : '';
      
      /* <------ answers for 600 --------> */
      $answer_600_1 = isset($_POST['answer_600_1']) ? htmlspecialchars(trim($_POST['answer_600_1'])) : '';
      $answer_600_2 = isset($_POST['answer_600_2']) ? htmlspecialchars(trim($_POST['answer_600_2'])) : '';
      $answer_600_3 = isset($_POST['answer_600_3']) ? htmlspecialchars(trim($_POST['answer_600_3'])) : '';
      $answer_600_4 = isset($_POST['answer_600_4']) ? htmlspecialchars(trim($_POST['answer_600_4'])) : '';
      $answer_600_5 = isset($_POST['answer_600_5']) ? htmlspecialchars(trim($_POST['answer_600_5'])) : '';
      $answer_600_6 = isset($_POST['answer_600_6']) ? htmlspecialchars(trim($_POST['answer_600_6'])) : '';
  
      /* <------ questions for 800 --------> */
      $question_800_1 = isset($_POST['question_800_1']) ? htmlspecialchars(trim($_POST['question_800_1'])) : '';
      $question_800_2 = isset($_POST['question_800_2']) ? htmlspecialchars(trim($_POST['question_800_2'])) : '';
      $question_800_3 = isset($_POST['question_800_3']) ? htmlspecialchars(trim($_POST['question_800_3'])) : '';
      $question_800_4 = isset($_POST['question_800_4']) ? htmlspecialchars(trim($_POST['question_800_4'])) : '';
      $question_800_5 = isset($_POST['question_800_5']) ? htmlspecialchars(trim($_POST['question_800_5'])) : '';
      $question_800_6 = isset($_POST['question_800_6']) ? htmlspecialchars(trim($_POST['question_800_6'])) : '';
      
      /* <------ answers for 800 --------> */
      $answer_800_1 = isset($_POST['answer_800_1']) ? htmlspecialchars(trim($_POST['answer_800_1'])) : '';
      $answer_800_2 = isset($_POST['answer_800_2']) ? htmlspecialchars(trim($_POST['answer_800_2'])) : '';
      $answer_800_3 = isset($_POST['answer_800_3']) ? htmlspecialchars(trim($_POST['answer_800_3'])) : '';
      $answer_800_4 = isset($_POST['answer_800_4']) ? htmlspecialchars(trim($_POST['answer_800_4'])) : '';
      $answer_800_5 = isset($_POST['answer_800_5']) ? htmlspecialchars(trim($_POST['answer_800_5'])) : '';
      $answer_800_6 = isset($_POST['answer_800_6']) ? htmlspecialchars(trim($_POST['answer_800_6'])) : '';
  
      /* <------ questions for 1000 --------> */
      $question_1000_1 = isset($_POST['question_1000_1']) ? htmlspecialchars(trim($_POST['question_1000_1'])) : '';
      $question_1000_2 = isset($_POST['question_1000_2']) ? htmlspecialchars(trim($_POST['question_1000_2'])) : '';
      $question_1000_3 = isset($_POST['question_1000_3']) ? htmlspecialchars(trim($_POST['question_1000_3'])) : '';
      $question_1000_4 = isset($_POST['question_1000_4']) ? htmlspecialchars(trim($_POST['question_1000_4'])) : '';
      $question_1000_5 = isset($_POST['question_1000_5']) ? htmlspecialchars(trim($_POST['question_1000_5'])) : '';
      $question_1000_6 = isset($_POST['question_1000_6']) ? htmlspecialchars(trim($_POST['question_1000_6'])) : '';
      
      /* <------ answers for 1000 --------> */
      $answer_1000_1 = isset($_POST['answer_1000_1']) ? htmlspecialchars(trim($_POST['answer_1000_1'])) : '';
      $answer_1000_2 = isset($_POST['answer_1000_2']) ? htmlspecialchars(trim($_POST['answer_1000_2'])) : '';
      $answer_1000_3 = isset($_POST['answer_1000_3']) ? htmlspecialchars(trim($_POST['answer_1000_3'])) : '';
      $answer_1000_4 = isset($_POST['answer_1000_4']) ? htmlspecialchars(trim($_POST['answer_1000_4'])) : '';
      $answer_1000_5 = isset($_POST['answer_1000_5']) ? htmlspecialchars(trim($_POST['answer_1000_5'])) : '';
      $answer_1000_6 = isset($_POST['answer_1000_6']) ? htmlspecialchars(trim($_POST['answer_1000_6'])) : '';

      /* <------ group names --------> */
      $group_name_one = isset($_POST['group_name_one']) ? htmlspecialchars(trim($_POST['group_name_one'])) : '';
      $group_name_two = isset($_POST['group_name_two']) ? htmlspecialchars(trim($_POST['group_name_two'])) :'';

  
      /* <------ updating group two --------> */

      if (!empty($group_name_two)) {
        $sql_update_group_name_two = "UPDATE group_name SET team_two = :group_name_two WHERE id = 1";
        $stmt_update_group_name_two = $db->prepare($sql_update_group_name_two);
        $stmt_update_group_name_two->bindParam(':group_name_two', $group_name_two, PDO::PARAM_STR);
        $stmt_update_group_name_two->execute();
      }

      /* <------ updating group one --------> */

      if (!empty($group_name_one)) {
        $sql_update_group_name_one = "UPDATE group_name SET team_one = :group_name_one WHERE id = 1";
        $stmt_update_group_name_one = $db->prepare($sql_update_group_name_one);
        $stmt_update_group_name_one->bindParam(':group_name_one', $group_name_one, PDO::PARAM_STR);
        $stmt_update_group_name_one->execute();
      }

      /* <------ updating game title --------> */

      if (!empty($game_title)) {
        $sql_update_game_title = "UPDATE game_title SET title = :game_title WHERE id = 1";
        $stmt_update_game_title = $db->prepare($sql_update_game_title);
        $stmt_update_game_title->bindParam(':game_title', $game_title, PDO::PARAM_STR);
        $stmt_update_game_title->execute();
      }

      /* <------ updating catergories --------> */
      if (!empty($category_one)) {
        $sql_update_category_one = "UPDATE column_one SET category_one = :row_one_col_one WHERE id = 1";
        $stmt_update_category_one = $db->prepare($sql_update_category_one);
        $stmt_update_category_one->bindParam(':row_one_col_one', $category_one, PDO::PARAM_STR);
        $stmt_update_category_one->execute();
      }
  
      if (!empty($category_two)) {
        $sql_update_category_two = "UPDATE column_two SET category_two = :row_one_col_two WHERE id = 1";
        $stmt_update_category_two = $db->prepare($sql_update_category_two);
        $stmt_update_category_two->bindParam(':row_one_col_two', $category_two, PDO::PARAM_STR);
        $stmt_update_category_two->execute();
      }
  
      if (!empty($category_three)) {
        $sql_update_category_three = "UPDATE column_three SET category_three = :row_one_col_three WHERE id = 1";
        $stmt_update_category_three = $db->prepare($sql_update_category_three);
        $stmt_update_category_three->bindParam(':row_one_col_three', $category_three, PDO::PARAM_STR);
        $stmt_update_category_three->execute();
      }
  
      if (!empty($category_four)) {
        $sql_update_category_four = "UPDATE column_four SET category_four = :row_one_col_four WHERE id = 1";
        $stmt_update_category_four = $db->prepare($sql_update_category_four);
        $stmt_update_category_four->bindParam(':row_one_col_four', $category_four, PDO::PARAM_STR);
        $stmt_update_category_four->execute();
      }
  
      if (!empty($category_five)) {
        $sql_update_category_five = "UPDATE column_five SET category_five = :row_one_col_five WHERE id = 1";
        $stmt_update_category_five = $db->prepare($sql_update_category_five);
        $stmt_update_category_five->bindParam(':row_one_col_five', $category_five, PDO::PARAM_STR);
        $stmt_update_category_five->execute();
      }
  
      if (!empty($category_six)) {
        $sql_update_category_six = "UPDATE column_six SET category_six = :row_one_col_six WHERE id = 1";
        $stmt_update_category_six = $db->prepare($sql_update_category_six);
        $stmt_update_category_six->bindParam(':row_one_col_six', $category_six, PDO::PARAM_STR);
        $stmt_update_category_six->execute();
      }
    /* <------ updating 200 value questions and answers --------> */
      if (!empty($question_200_1)) {
        $sql_update_question_one = "UPDATE column_one SET question_one_col_one = :question_200_1 WHERE id = 1";
        $stmt_update_question_one = $db->prepare($sql_update_question_one);
        $stmt_update_question_one->bindParam(':question_200_1', $question_200_1, PDO::PARAM_STR);
        $stmt_update_question_one->execute();
      }
  
      if (!empty($answer_200_1)) {
        $sql_update_answer_one = "UPDATE column_one SET answer_one_col_one = :answer_200_1 WHERE id = 1";
        $stmt_update_answer_one = $db->prepare($sql_update_answer_one);
        $stmt_update_answer_one->bindParam(':answer_200_1', $answer_200_1, PDO::PARAM_STR);
        $stmt_update_answer_one->execute();
      }
  
      if (!empty($question_200_2)) {
        $sql_update_question_two = "UPDATE column_two SET question_one_col_two = :question_200_2 WHERE id = 1";
        $stmt_update_question_two = $db->prepare($sql_update_question_two);
        $stmt_update_question_two->bindParam(':question_200_2', $question_200_2, PDO::PARAM_STR);
        $stmt_update_question_two->execute();
      }
  
      if (!empty($answer_200_2)) {
        $sql_update_answer_two = "UPDATE column_two SET answer_one_col_two = :answer_200_2 WHERE id = 1";
        $stmt_update_answer_two = $db->prepare($sql_update_answer_two);
        $stmt_update_answer_two->bindParam(':answer_200_2', $answer_200_2, PDO::PARAM_STR);
        $stmt_update_answer_two->execute();
      }
      
      if (!empty($question_200_3)) {
        $sql_update_question_three = "UPDATE column_three SET question_one_col_three = :question_200_3 WHERE id = 1";
        $stmt_update_question_three = $db->prepare($sql_update_question_three);
        $stmt_update_question_three->bindParam(':question_200_3', $question_200_3, PDO::PARAM_STR);
        $stmt_update_question_three->execute();
      }
  
      if (!empty($answer_200_3)) {
        $sql_update_answer_three = "UPDATE column_three SET answer_one_col_three = :answer_200_3 WHERE id = 1";
        $stmt_update_answer_three = $db->prepare($sql_update_answer_three);
        $stmt_update_answer_three->bindParam(':answer_200_3', $answer_200_3, PDO::PARAM_STR);
        $stmt_update_answer_three->execute();
      }
      
      if (!empty($question_200_4)) {
        $sql_update_question_four = "UPDATE column_four SET question_one_col_four = :question_200_4 WHERE id = 1";
        $stmt_update_question_four = $db->prepare($sql_update_question_four);
        $stmt_update_question_four->bindParam(':question_200_4', $question_200_4, PDO::PARAM_STR);
        $stmt_update_question_four->execute();
      }
  
      if (!empty($answer_200_4)) {
        $sql_update_answer_four = "UPDATE column_four SET answer_one_col_four = :answer_200_4 WHERE id = 1";
        $stmt_update_answer_four = $db->prepare($sql_update_answer_four);
        $stmt_update_answer_four->bindParam(':answer_200_4', $answer_200_4, PDO::PARAM_STR);
        $stmt_update_answer_four->execute();
      }
  
      if (!empty($question_200_5)) {
        $sql_update_question_five = "UPDATE column_five SET question_one_col_five = :question_200_5 WHERE id = 1";
        $stmt_update_question_five = $db->prepare($sql_update_question_five);
        $stmt_update_question_five->bindParam(':question_200_5', $question_200_5, PDO::PARAM_STR);
        $stmt_update_question_five->execute();
      }
  
      if (!empty($answer_200_5)) {
        $sql_update_answer_five = "UPDATE column_five SET answer_one_col_five = :answer_200_5 WHERE id = 1";
        $stmt_update_answer_five = $db->prepare($sql_update_answer_five);
        $stmt_update_answer_five->bindParam(':answer_200_5', $answer_200_5, PDO::PARAM_STR);
        $stmt_update_answer_five->execute();
      }
  
      if (!empty($question_200_6)) {
        $sql_update_question_six = "UPDATE column_six SET question_one_col_six = :question_200_6 WHERE id = 1";
        $stmt_update_question_six = $db->prepare($sql_update_question_six);
        $stmt_update_question_six->bindParam(':question_200_6', $question_200_6, PDO::PARAM_STR);
        $stmt_update_question_six->execute();
      }
  
      if (!empty($answer_200_6)) {
        $sql_update_answer_six = "UPDATE column_six SET answer_one_col_six = :answer_200_6 WHERE id = 1";
        $stmt_update_answer_six = $db->prepare($sql_update_answer_six);
        $stmt_update_answer_six->bindParam(':answer_200_6', $answer_200_6, PDO::PARAM_STR);
        $stmt_update_answer_six->execute();
      }
  
      /* <------ updating 400 value questions and answers --------> */
  
      if (!empty($question_400_1)) {
        $sql_update_question_one = "UPDATE column_one SET question_two_col_one = :question_400_1 WHERE id = 1";
        $stmt_update_question_one = $db->prepare($sql_update_question_one);
        $stmt_update_question_one->bindParam(':question_400_1', $question_400_1, PDO::PARAM_STR);
        $stmt_update_question_one->execute();
      }
  
      if (!empty($answer_400_1)) {
        $sql_update_answer_one = "UPDATE column_one SET answer_two_col_one = :answer_400_1 WHERE id = 1";
        $stmt_update_answer_one = $db->prepare($sql_update_answer_one);
        $stmt_update_answer_one->bindParam(':answer_400_1', $answer_400_1, PDO::PARAM_STR);
        $stmt_update_answer_one->execute();
      }
  
      if (!empty($question_400_2)) {
        $sql_update_question_two = "UPDATE column_two SET question_two_col_two = :question_400_2 WHERE id = 1";
        $stmt_update_question_two = $db->prepare($sql_update_question_two);
        $stmt_update_question_two->bindParam(':question_400_2', $question_400_2, PDO::PARAM_STR);
        $stmt_update_question_two->execute();
      }
  
      if (!empty($answer_400_2)) {
        $sql_update_answer_two = "UPDATE column_two SET answer_two_col_two = :answer_400_2 WHERE id = 1";
        $stmt_update_answer_two = $db->prepare($sql_update_answer_two);
        $stmt_update_answer_two->bindParam(':answer_400_2', $answer_400_2, PDO::PARAM_STR);
        $stmt_update_answer_two->execute();
      }
      
      if (!empty($question_400_3)) {
        $sql_update_question_three = "UPDATE column_three SET question_two_col_three = :question_400_3 WHERE id = 1";
        $stmt_update_question_three = $db->prepare($sql_update_question_three);
        $stmt_update_question_three->bindParam(':question_400_3', $question_400_3, PDO::PARAM_STR);
        $stmt_update_question_three->execute();
      }
  
      if (!empty($answer_400_3)) {
        $sql_update_answer_three = "UPDATE column_three SET answer_two_col_three = :answer_400_3 WHERE id = 1";
        $stmt_update_answer_three = $db->prepare($sql_update_answer_three);
        $stmt_update_answer_three->bindParam(':answer_400_3', $answer_400_3, PDO::PARAM_STR);
        $stmt_update_answer_three->execute();
      }
      
      if (!empty($question_400_4)) {
        $sql_update_question_four = "UPDATE column_four SET question_two_col_four = :question_400_4 WHERE id = 1";
        $stmt_update_question_four = $db->prepare($sql_update_question_four);
        $stmt_update_question_four->bindParam(':question_400_4', $question_400_4, PDO::PARAM_STR);
        $stmt_update_question_four->execute();
      }
  
      if (!empty($answer_400_4)) {
        $sql_update_answer_four = "UPDATE column_four SET answer_two_col_four = :answer_400_4 WHERE id = 1";
        $stmt_update_answer_four = $db->prepare($sql_update_answer_four);
        $stmt_update_answer_four->bindParam(':answer_400_4', $answer_400_4, PDO::PARAM_STR);
        $stmt_update_answer_four->execute();
      }
  
      if (!empty($question_400_5)) {
        $sql_update_question_five = "UPDATE column_five SET question_two_col_five = :question_400_5 WHERE id = 1";
        $stmt_update_question_five = $db->prepare($sql_update_question_five);
        $stmt_update_question_five->bindParam(':question_400_5', $question_400_5, PDO::PARAM_STR);
        $stmt_update_question_five->execute();
      }
  
      if (!empty($answer_400_5)) {
        $sql_update_answer_five = "UPDATE column_five SET answer_two_col_five = :answer_400_5 WHERE id = 1";
        $stmt_update_answer_five = $db->prepare($sql_update_answer_five);
        $stmt_update_answer_five->bindParam(':answer_400_5', $answer_400_5, PDO::PARAM_STR);
        $stmt_update_answer_five->execute();
      }
  
      if (!empty($question_400_6)) {
        $sql_update_question_six = "UPDATE column_six SET question_two_col_six = :question_400_6 WHERE id = 1";
        $stmt_update_question_six = $db->prepare($sql_update_question_six);
        $stmt_update_question_six->bindParam(':question_400_6', $question_400_6, PDO::PARAM_STR);
        $stmt_update_question_six->execute();
      }
  
      if (!empty($answer_400_6)) {
        $sql_update_answer_six = "UPDATE column_six SET answer_two_col_six = :answer_400_6 WHERE id = 1";
        $stmt_update_answer_six = $db->prepare($sql_update_answer_six);
        $stmt_update_answer_six->bindParam(':answer_400_6', $answer_400_6, PDO::PARAM_STR);
        $stmt_update_answer_six->execute();
      }
  
      /* <------ updating 600 value questions and answers --------> */
  
      if (!empty($question_600_1)) {
        $sql_update_question_one = "UPDATE column_one SET question_three_col_one = :question_600_1 WHERE id = 1";
        $stmt_update_question_one = $db->prepare($sql_update_question_one);
        $stmt_update_question_one->bindParam(':question_600_1', $question_600_1, PDO::PARAM_STR);
        $stmt_update_question_one->execute();
      }
  
      if (!empty($answer_600_1)) {
        $sql_update_answer_one = "UPDATE column_one SET answer_three_col_one = :answer_600_1 WHERE id = 1";
        $stmt_update_answer_one = $db->prepare($sql_update_answer_one);
        $stmt_update_answer_one->bindParam(':answer_600_1', $answer_600_1, PDO::PARAM_STR);
        $stmt_update_answer_one->execute();
      }
  
      if (!empty($question_600_2)) {
        $sql_update_question_two = "UPDATE column_two SET question_three_col_two = :question_600_2 WHERE id = 1";
        $stmt_update_question_two = $db->prepare($sql_update_question_two);
        $stmt_update_question_two->bindParam(':question_600_2', $question_600_2, PDO::PARAM_STR);
        $stmt_update_question_two->execute();
      }
  
      if (!empty($answer_600_2)) {
        $sql_update_answer_two = "UPDATE column_two SET answer_three_col_two = :answer_600_2 WHERE id = 1";
        $stmt_update_answer_two = $db->prepare($sql_update_answer_two);
        $stmt_update_answer_two->bindParam(':answer_600_2', $answer_600_2, PDO::PARAM_STR);
        $stmt_update_answer_two->execute();
      }
  
      if (!empty($question_600_3)) {
        $sql_update_question_three = "UPDATE column_three SET question_three_col_three = :question_600_3 WHERE id = 1";
        $stmt_update_question_three = $db->prepare($sql_update_question_three);
        $stmt_update_question_three->bindParam(':question_600_3', $question_600_3, PDO::PARAM_STR);
        $stmt_update_question_three->execute();
      }
  
      if (!empty($answer_600_3)) {
        $sql_update_answer_three = "UPDATE column_three SET answer_three_col_three = :answer_600_3 WHERE id = 1";
        $stmt_update_answer_three = $db->prepare($sql_update_answer_three);
        $stmt_update_answer_three->bindParam(':answer_600_3', $answer_600_3, PDO::PARAM_STR);
        $stmt_update_answer_three->execute();
      }
  
      if (!empty($question_600_4)) {
        $sql_update_question_four = "UPDATE column_four SET question_three_col_four = :question_600_4 WHERE id = 1";
        $stmt_update_question_four = $db->prepare($sql_update_question_four);
        $stmt_update_question_four->bindParam(':question_600_4', $question_600_4, PDO::PARAM_STR);
        $stmt_update_question_four->execute();
      }
  
      if (!empty($answer_600_4)) {
        $sql_update_answer_four = "UPDATE column_four SET answer_three_col_four = :answer_600_4 WHERE id = 1";
        $stmt_update_answer_four = $db->prepare($sql_update_answer_four);
        $stmt_update_answer_four->bindParam(':answer_600_4', $answer_600_4, PDO::PARAM_STR);
        $stmt_update_answer_four->execute();
      }
  
      if (!empty($question_600_5)) {
        $sql_update_question_five = "UPDATE column_five SET question_three_col_five = :question_600_5 WHERE id = 1";
        $stmt_update_question_five = $db->prepare($sql_update_question_five);
        $stmt_update_question_five->bindParam(':question_600_5', $question_600_5, PDO::PARAM_STR);
        $stmt_update_question_five->execute();
      }
  
      if (!empty($answer_600_5)) {
        $sql_update_answer_five = "UPDATE column_five SET answer_three_col_five = :answer_600_5 WHERE id = 1";
        $stmt_update_answer_five = $db->prepare($sql_update_answer_five);
        $stmt_update_answer_five->bindParam(':answer_600_5', $answer_600_5, PDO::PARAM_STR);
        $stmt_update_answer_five->execute();
      }
  
      if (!empty($question_600_6)) {
        $sql_update_question_six = "UPDATE column_six SET question_three_col_six = :question_600_6 WHERE id = 1";
        $stmt_update_question_six = $db->prepare($sql_update_question_six);
        $stmt_update_question_six->bindParam(':question_600_6', $question_600_6, PDO::PARAM_STR);
        $stmt_update_question_six->execute();
      }
  
      if (!empty($answer_600_6)) {
        $sql_update_answer_six = "UPDATE column_six SET answer_three_col_six = :answer_600_6 WHERE id = 1";
        $stmt_update_answer_six = $db->prepare($sql_update_answer_six);
        $stmt_update_answer_six->bindParam(':answer_600_6', $answer_600_6, PDO::PARAM_STR);
        $stmt_update_answer_six->execute();
      }
  
       /* <------ updating 800 value questions and answers --------> */
  
       if (!empty($question_800_1)) {
        $sql_update_question_one = "UPDATE column_one SET question_four_col_one = :question_800_1 WHERE id = 1";
        $stmt_update_question_one = $db->prepare($sql_update_question_one);
        $stmt_update_question_one->bindParam(':question_800_1', $question_800_1, PDO::PARAM_STR);
        $stmt_update_question_one->execute();
      }
  
      if (!empty($answer_800_1)) {
        $sql_update_answer_one = "UPDATE column_one SET answer_four_col_one = :answer_800_1 WHERE id = 1";
        $stmt_update_answer_one = $db->prepare($sql_update_answer_one);
        $stmt_update_answer_one->bindParam(':answer_800_1', $answer_800_1, PDO::PARAM_STR);
        $stmt_update_answer_one->execute();
      }
  
      if (!empty($question_800_2)) {
        $sql_update_question_two = "UPDATE column_two SET question_four_col_two = :question_800_2 WHERE id = 1";
        $stmt_update_question_two = $db->prepare($sql_update_question_two);
        $stmt_update_question_two->bindParam(':question_800_2', $question_800_2, PDO::PARAM_STR);
        $stmt_update_question_two->execute();
      }
  
      if (!empty($answer_800_2)) {
        $sql_update_answer_two = "UPDATE column_two SET answer_four_col_two = :answer_800_2 WHERE id = 1";
        $stmt_update_answer_two = $db->prepare($sql_update_answer_two);
        $stmt_update_answer_two->bindParam(':answer_800_2', $answer_800_2, PDO::PARAM_STR);
        $stmt_update_answer_two->execute();
      }
  
      if (!empty($question_800_3)) {
        $sql_update_question_three = "UPDATE column_three SET question_four_col_three = :question_800_3 WHERE id = 1";
        $stmt_update_question_three = $db->prepare($sql_update_question_three);
        $stmt_update_question_three->bindParam(':question_800_3', $question_800_3, PDO::PARAM_STR);
        $stmt_update_question_three->execute();
      }
  
      if (!empty($answer_800_3)) {
        $sql_update_answer_three = "UPDATE column_three SET answer_four_col_three = :answer_800_3 WHERE id = 1";
        $stmt_update_answer_three = $db->prepare($sql_update_answer_three);
        $stmt_update_answer_three->bindParam(':answer_800_3', $answer_800_3, PDO::PARAM_STR);
        $stmt_update_answer_three->execute();
      }
  
      if (!empty($question_800_4)) {
        $sql_update_question_four = "UPDATE column_four SET question_four_col_four = :question_800_4 WHERE id = 1";
        $stmt_update_question_four = $db->prepare($sql_update_question_four);
        $stmt_update_question_four->bindParam(':question_800_4', $question_800_4, PDO::PARAM_STR);
        $stmt_update_question_four->execute();
      }
  
      if (!empty($answer_800_4)) {
        $sql_update_answer_four = "UPDATE column_four SET answer_four_col_four = :answer_800_4 WHERE id = 1";
        $stmt_update_answer_four = $db->prepare($sql_update_answer_four);
        $stmt_update_answer_four->bindParam(':answer_800_4', $answer_800_4, PDO::PARAM_STR);
        $stmt_update_answer_four->execute();
      }
  
      if (!empty($question_800_5)) {
        $sql_update_question_five = "UPDATE column_five SET question_four_col_five = :question_800_5 WHERE id = 1";
        $stmt_update_question_five = $db->prepare($sql_update_question_five);
        $stmt_update_question_five->bindParam(':question_800_5', $question_800_5, PDO::PARAM_STR);
        $stmt_update_question_five->execute();
      }
  
      if (!empty($answer_800_5)) {
        $sql_update_answer_five = "UPDATE column_five SET answer_four_col_five = :answer_800_5 WHERE id = 1";
        $stmt_update_answer_five = $db->prepare($sql_update_answer_five);
        $stmt_update_answer_five->bindParam(':answer_800_5', $answer_800_5, PDO::PARAM_STR);
        $stmt_update_answer_five->execute();
      }
  
      if (!empty($question_800_6)) {
        $sql_update_question_six = "UPDATE column_six SET question_four_col_six = :question_800_6 WHERE id = 1";
        $stmt_update_question_six = $db->prepare($sql_update_question_six);
        $stmt_update_question_six->bindParam(':question_800_6', $question_800_6, PDO::PARAM_STR);
        $stmt_update_question_six->execute();
      }
  
      if (!empty($answer_800_6)) {
        $sql_update_answer_six = "UPDATE column_six SET answer_four_col_six = :answer_800_6 WHERE id = 1";
        $stmt_update_answer_six = $db->prepare($sql_update_answer_six);
        $stmt_update_answer_six->bindParam(':answer_800_6', $answer_800_6, PDO::PARAM_STR);
        $stmt_update_answer_six->execute();
      }
  
      /* <------ updating 800 value questions and answers --------> */
  
      if (!empty($question_1000_1)) {
        $sql_update_question_one = "UPDATE column_one SET question_five_col_one = :question_1000_1 WHERE id = 1";
        $stmt_update_question_one = $db->prepare($sql_update_question_one);
        $stmt_update_question_one->bindParam(':question_1000_1', $question_1000_1, PDO::PARAM_STR);
        $stmt_update_question_one->execute();
      }
  
      if (!empty($answer_1000_1)) {
        $sql_update_answer_one = "UPDATE column_one SET answer_five_col_one = :answer_1000_1 WHERE id = 1";
        $stmt_update_answer_one = $db->prepare($sql_update_answer_one);
        $stmt_update_answer_one->bindParam(':answer_1000_1', $answer_1000_1, PDO::PARAM_STR);
        $stmt_update_answer_one->execute();
      }
  
      if (!empty($question_1000_2)) {
        $sql_update_question_two = "UPDATE column_two SET question_five_col_two = :question_1000_2 WHERE id = 1";
        $stmt_update_question_two = $db->prepare($sql_update_question_two);
        $stmt_update_question_two->bindParam(':question_1000_2', $question_1000_2, PDO::PARAM_STR);
        $stmt_update_question_two->execute();
      }
  
      if (!empty($answer_1000_2)) {
        $sql_update_answer_two = "UPDATE column_two SET answer_five_col_two = :answer_1000_2 WHERE id = 1";
        $stmt_update_answer_two = $db->prepare($sql_update_answer_two);
        $stmt_update_answer_two->bindParam(':answer_1000_2', $answer_1000_2, PDO::PARAM_STR);
        $stmt_update_answer_two->execute();
      }
  
      if (!empty($question_1000_3)) {
        $sql_update_question_three = "UPDATE column_three SET question_five_col_three = :answer_1000_3 WHERE id = 1";
        $stmt_update_question_three = $db->prepare($sql_update_question_three);
        $stmt_update_question_three->bindParam(':answer_1000_3', $answer_1000_3, PDO::PARAM_STR);
        $stmt_update_question_three->execute();
      }
  
      if (!empty($answer_1000_3)) {
        $sql_update_answer_three = "UPDATE column_three SET answer_five_col_three = :answer_1000_3 WHERE id = 1";
        $stmt_update_answer_three = $db->prepare($sql_update_answer_three);
        $stmt_update_answer_three->bindParam(':answer_1000_3', $answer_1000_3, PDO::PARAM_STR);
        $stmt_update_answer_three->execute();
      }
  
      if (!empty($question_1000_4)) {
        $sql_update_question_four = "UPDATE column_four SET question_five_col_four = :question_1000_4 WHERE id = 1";
        $stmt_update_question_four = $db->prepare($sql_update_question_four);
        $stmt_update_question_four->bindParam(':question_1000_4', $question_1000_4, PDO::PARAM_STR);
        $stmt_update_question_four->execute();
      }
  
      if (!empty($answer_1000_4)) {
        $sql_update_answer_four = "UPDATE column_four SET answer_five_col_four = :answer_1000_4 WHERE id = 1";
        $stmt_update_answer_four = $db->prepare($sql_update_answer_four);
        $stmt_update_answer_four->bindParam(':answer_1000_4', $answer_1000_4, PDO::PARAM_STR);
        $stmt_update_answer_four->execute();
      }
  
      if (!empty($question_1000_5)) {
        $sql_update_question_five = "UPDATE column_five SET question_five_col_five = :question_1000_5 WHERE id = 1";
        $stmt_update_question_five = $db->prepare($sql_update_question_five);
        $stmt_update_question_five->bindParam(':question_1000_5', $question_1000_5, PDO::PARAM_STR);
        $stmt_update_question_five->execute();
      }
  
      if (!empty($answer_1000_5)) {
        $sql_update_answer_five = "UPDATE column_five SET answer_five_col_five = :answer_1000_5 WHERE id = 1";
        $stmt_update_answer_five = $db->prepare($sql_update_answer_five);
        $stmt_update_answer_five->bindParam(':answer_1000_5', $answer_1000_5, PDO::PARAM_STR);
        $stmt_update_answer_five->execute();
      }
  
      if (!empty($question_1000_6)) {
        $sql_update_question_six = "UPDATE column_six SET question_five_col_six = :question_1000_6 WHERE id = 1";
        $stmt_update_question_six = $db->prepare($sql_update_question_six);
        $stmt_update_question_six->bindParam(':question_1000_6', $question_1000_6, PDO::PARAM_STR);
        $stmt_update_question_six->execute();
      }
  
      if (!empty($answer_1000_6)) {
        $sql_update_answer_six = "UPDATE column_six SET answer_five_col_six = :answer_1000_6 WHERE id = 1";
        $stmt_update_answer_six = $db->prepare($sql_update_answer_six);
        $stmt_update_answer_six->bindParam(':answer_1000_6', $answer_1000_6, PDO::PARAM_STR);
        $stmt_update_answer_six->execute();
      }
  };
  } catch (PDOException $e) {
      throw new PDOException($e->getMessage(), (int)$e->getCode());
  }
  
  ?> 