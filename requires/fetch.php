<?php

$db = new PDO($dns);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/* <<<-------- getting data from game title table ----------->>> */
$sql_fetch = "SELECT * FROM game_title WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$game_title = $row['title'];

/* <<<-------- getting data from column_one table ----------->>> */
$sql_fetch = "SELECT * FROM column_one WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$category_one = $row['category_one'];
$question_200_1 = $row['question_one_col_one'];
$answer_200_1 = $row['answer_one_col_one'];
$question_400_1 = $row['question_two_col_one'];
$answer_400_1 = $row['answer_two_col_one'];
$question_600_1 = $row['question_three_col_one'];
$answer_600_1 = $row['answer_three_col_one'];
$question_800_1 = $row['question_four_col_one'];
$answer_800_1 = $row['answer_four_col_one'];
$question_1000_1 = $row['question_five_col_one'];
$answer_1000_1 = $row['answer_five_col_one'];

/* <<<-------- getting data from column_two table ----------->>> */
$sql_fetch = "SELECT * FROM column_two WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$category_two = $row['category_two'];
$question_200_2 = $row['question_one_col_two'];
$answer_200_2 = $row['answer_one_col_two'];
$question_400_2 = $row['question_two_col_two'];
$answer_400_2 = $row['answer_two_col_two'];
$question_600_2 = $row['question_three_col_two'];
$answer_600_2 = $row['answer_three_col_two'];
$question_800_2 = $row['question_four_col_two'];
$answer_800_2 = $row['answer_four_col_two'];
$question_1000_2 = $row['question_five_col_two'];
$answer_1000_2 = $row['answer_five_col_two'];

/* <<<-------- getting data from column_three table ----------->>> */
$sql_fetch = "SELECT * FROM column_three WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$category_three = $row['category_three'];
$question_200_3 = $row['question_one_col_three'];
$answer_200_3 = $row['answer_one_col_three'];
$question_400_3 = $row['question_two_col_three'];
$answer_400_3 = $row['answer_two_col_three'];
$question_600_3 = $row['question_three_col_three'];
$answer_600_3 = $row['answer_three_col_three'];
$question_800_3 = $row['question_four_col_three'];
$answer_800_3 = $row['answer_four_col_three'];
$question_1000_3 = $row['question_five_col_three'];
$answer_1000_3 = $row['answer_five_col_three'];

/* <<<-------- getting data from column_four table ----------->>> */
$sql_fetch = "SELECT * FROM column_four WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$category_four = $row['category_four'];
$question_200_4 = $row['question_one_col_four'];
$answer_200_4 = $row['answer_one_col_four'];
$question_400_4 = $row['question_two_col_four'];
$answer_400_4 = $row['answer_two_col_four'];
$question_600_4 = $row['question_three_col_four'];
$answer_600_4 = $row['answer_three_col_four'];
$question_800_4 = $row['question_four_col_four'];
$answer_800_4 = $row['answer_four_col_four'];
$question_1000_4 = $row['question_five_col_four'];
$answer_1000_4 = $row['answer_five_col_four'];

/* <<<-------- getting data from column_five table ----------->>> */
$sql_fetch = "SELECT * FROM column_five WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$category_five = $row['category_five'];
$question_200_5 = $row['question_one_col_five'];
$answer_200_5 = $row['answer_one_col_five'];
$question_400_5 = $row['question_two_col_five'];
$answer_400_5 = $row['answer_two_col_five'];
$question_600_5 = $row['question_three_col_five'];
$answer_600_5 = $row['answer_three_col_five'];
$question_800_5 = $row['question_four_col_five'];
$answer_800_5 = $row['answer_four_col_five'];
$question_1000_5 = $row['question_five_col_five'];
$answer_1000_5 = $row['answer_five_col_five'];

/* <<<-------- getting data from column_six table ----------->>> */
$sql_fetch = "SELECT * FROM column_six WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$category_six = $row['category_six'];
$question_200_6 = $row['question_one_col_six'];
$answer_200_6 = $row['answer_one_col_six'];
$question_400_6 = $row['question_two_col_six'];
$answer_400_6 = $row['answer_two_col_six'];
$question_600_6 = $row['question_three_col_six'];
$answer_600_6 = $row['answer_three_col_six'];
$question_800_6 = $row['question_four_col_six'];
$answer_800_6 = $row['answer_four_col_six'];
$question_1000_6 = $row['question_five_col_six'];
$answer_1000_6 = $row['answer_five_col_six'];

$sql_fetch = "SELECT * FROM group_name WHERE id = 1";
$stmt = $db->prepare($sql_fetch);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$group_name_one = $row['team_one'];
$group_name_two = $row['team_two'];

?>