<?php

require_once 'requires/config.php';
require_once 'requires/fetch.php';
require_once 'requires/login_session.php';

require_login($logged_in);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeopardy</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="../Jeopardy/css/style.css">
</head>

<body>
    <div class="button_holder">
        <a class="save" href="game_edit_copy.php">Edit</a>
        <a href="logout.php" class="logout">Log Out</a>
    </div>
    <div class="group_classs_container">
        <label class="group_classs">Group Names and Scores:</label>
    </div>
    <div class="group_scores_container">
        <table class="result_table_play">
            <tr>
                <th><label class="group" placeholder="Group Name"><?php echo $group_name_one ?></label></th>
                <th><label class="group" placeholder="Group Name"><?php echo $group_name_two ?></label></th>
            </tr>
            <tr>
                <td><label id="incg1" class="score" contenteditable="true">0</label></td>
                <td><label id="incg2" class="score" contenteditable="true">0</label></td>
            </tr>
        </table>
    </div>
    </div>
    <div class="game_title_containter">
        <label class="game_title_play" placeholder="Enter a title"><?php echo $game_title ?></label>
    </div>
    <div class="label_category_container">
        <label class="label_category" id="col_one_row_one" placeholder="Enter Category Name">
            <?php echo $category_one ?> </label>
        <label class="label_category" id="col_two_row_one"
            placeholder="Enter Category Name"><?php echo $category_two ?></label>
        <label class="label_category" id="col_three_row_one"
            placeholder="Enter Category Name"><?php echo $category_three ?></label>
        <label class="label_category" id="col_four_row_one"
            placeholder="Enter Category Name"><?php echo $category_four ?></label>
        <label class="label_category" id="col_five_row_one"
            placeholder="Enter Category Name"><?php echo $category_five ?></label>
        <label class="label_category" id="col_six_row_one"
            placeholder="Enter Category Name"><?php echo $category_six ?></label>
    </div>
    <div class="row_one">
        <button id="200_1" class="category_button" onclick="open_modal_question_200_1()" type="button">200</button>
        <div id="modal_container_200_1" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_200_1 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_200_1 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick200G1()>200</label></td>
                            <td><label class="save_play_button" onclick=buttonClick200G2()>200</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_200_1()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="200_2" class="category_button" onclick="open_modal_question_200_2()" type="button">200</button>
        <div id="modal_container_200_2" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_200_2 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_200_2 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick200G1()>200</label></td>
                            <td><label class="save_play_button" onclick=buttonClick200G2()>200</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_200_2()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="200_3" class="category_button" onclick="open_modal_question_200_3()" type="button">200</button>
        <div id="modal_container_200_3" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_200_3 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_200_3 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick200G1()>200</label></td>
                            <td><label class="save_play_button" onclick=buttonClick200G2()>200</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_200_3()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="200_4" class="category_button" onclick="open_modal_question_200_4()" type="button">200</button>
        <div id="modal_container_200_4" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_200_4 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_200_4 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick200G1()>200</label></td>
                            <td><label class="save_play_button" onclick=buttonClick200G2()>200</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_200_4()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="200_5" class="category_button" onclick="open_modal_question_200_5()" type="button">200</button>
        <div id="modal_container_200_5" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_200_5 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_200_5 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick200G1()>200</label></td>
                            <td><label class="save_play_button" onclick=buttonClick200G2()>200</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_200_5()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="200_6" class="category_button" onclick="open_modal_question_200_6()" type="button">200</button>
        <div id="modal_container_200_6" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_200_6 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_200_6 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick200G1()>200</label></td>
                            <td><label class="save_play_button" onclick=buttonClick200G2()>200</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_200_6()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row_two">
        <button id="400_1" class="category_button" onclick="open_modal_question_400_1()" type="button">400</button>
        <div id="modal_container_400_1" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_400_1 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_400_1 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick400G1()>400</label></td>
                            <td><label class="save_play_button" onclick=buttonClick400G2()>400</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_400_1()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="400_2" class="category_button" onclick="open_modal_question_400_2()" type="button">400</button>
        <div id="modal_container_400_2" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_400_2 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_400_2 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick400G1()>400</label></td>
                            <td><label class="save_play_button" onclick=buttonClick400G2()>400</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_400_2()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="400_3" class="category_button" onclick="open_modal_question_400_3()" type="button">400</button>
        <div id="modal_container_400_3" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_400_3 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_400_3 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick400G1()>400</label></td>
                            <td><label class="save_play_button" onclick=buttonClick400G2()>400</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_400_3()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="400_4" class="category_button" onclick="open_modal_question_400_4()" type="button">400</button>
        <div id="modal_container_400_4" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_400_4 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_400_4 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick400G1()>400</label></td>
                            <td><label class="save_play_button" onclick=buttonClick400G2()>400</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_400_4()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="400_5" class="category_button" onclick="open_modal_question_400_5()" type="button">400</button>
        <div id="modal_container_400_5" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_400_5 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_400_5 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick400G1()>400</label></td>
                            <td><label class="save_play_button" onclick=buttonClick400G2()>400</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_400_5()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="400_6" class="category_button" onclick="open_modal_question_400_6()" type="button">400</button>
        <div id="modal_container_400_6" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_400_6 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_400_6 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick400G1()>400</label></td>
                            <td><label class="save_play_button" onclick=buttonClick400G2()>400</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_400_6()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row_three">
        <button id="600_1" class="category_button" onclick="open_modal_question_600_1()" type="button">600</button>
        <div id="modal_container_600_1" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_600_1 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_600_1 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick600G1()>600</label></td>
                            <td><label class="save_play_button" onclick=buttonClick600G2()>600</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_600_1()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="600_2" class="category_button" onclick="open_modal_question_600_2()" type="button">600</button>
        <div id="modal_container_600_2" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_600_2 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_600_2 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick600G1()>600</label></td>
                            <td><label class="save_play_button" onclick=buttonClick600G2()>600</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_600_2()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="600_3" class="category_button" onclick="open_modal_question_600_3()" type="button">600</button>
        <div id="modal_container_600_3" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_600_3 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_600_3 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick600G1()>600</label></td>
                            <td><label class="save_play_button" onclick=buttonClick600G2()>600</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_600_3()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="600_4" class="category_button" onclick="open_modal_question_600_4()" type="button">600</button>
        <div id="modal_container_600_4" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_600_4 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_600_4 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick600G1()>600</label></td>
                            <td><label class="save_play_button" onclick=buttonClick600G2()>600</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_600_4()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="600_5" class="category_button" onclick="open_modal_question_600_5()" type="button">600</button>
        <div id="modal_container_600_5" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_600_5 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_600_5 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick600G1()>600</label></td>
                            <td><label class="save_play_button" onclick=buttonClick600G2()>600</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_600_5()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="600_6" class="category_button" onclick="open_modal_question_600_6()" type="button">600</button>
        <div id="modal_container_600_6" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_600_6 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_600_6 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick600G1()>600</label></td>
                            <td><label class="save_play_button" onclick=buttonClick600G2()>600</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_600_6()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row_four">
        <button id="800_1" class="category_button" onclick="open_modal_question_800_1()" type="button">800</button>
        <div id="modal_container_800_1" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_800_1 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_800_1 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick800G1()>800</label></td>
                            <td><label class="save_play_button" onclick=buttonClick800G2()>800</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_800_1()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="800_2" class="category_button" onclick="open_modal_question_800_2()" type="button">800</button>
        <div id="modal_container_800_2" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_800_2 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_800_2 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick800G1()>800</label></td>
                            <td><label class="save_play_button" onclick=buttonClick800G2()>800</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_800_2()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="800_3" class="category_button" onclick="open_modal_question_800_3()" type="button">800</button>
        <div id="modal_container_800_3" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_800_3 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_800_3 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick800G1()>800</label></td>
                            <td><label class="save_play_button" onclick=buttonClick800G2()>800</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_800_3()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="800_4" class="category_button" onclick="open_modal_question_800_4()" type="button">800</button>
        <div id="modal_container_800_4" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_800_4 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_800_4 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick800G1()>800</label></td>
                            <td><label class="save_play_button" onclick=buttonClick800G2()>800</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_800_4()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="800_5" class="category_button" onclick="open_modal_question_800_5()" type="button">800</button>
        <div id="modal_container_800_5" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_800_5 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_800_5 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick800G1()>800</label></td>
                            <td><label class="save_play_button" onclick=buttonClick800G2()>800</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_800_5()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="800_6" class="category_button" onclick="open_modal_question_800_6()" type="button">800</button>
        <div id="modal_container_800_6" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_800_6 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_800_6 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick800G1()>800</label></td>
                            <td><label class="save_play_button" onclick=buttonClick800G2()>800</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_800_6()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row_five">
        <button id="1000_1" class="category_button" onclick="open_modal_question_1000_1()" type="button">1000</button>
        <div id="modal_container_1000_1" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_1000_1 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_1000_1 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick1000G1()>1000</label></td>
                            <td><label class="save_play_button" onclick=buttonClick1000G2()>1000</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_1000_1()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="1000_2" class="category_button" onclick="open_modal_question_1000_2()" type="button">1000</button>
        <div id="modal_container_1000_2" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_1000_2 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_1000_2 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick1000G1()>1000</label></td>
                            <td><label class="save_play_button" onclick=buttonClick1000G2()>1000</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_1000_2()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="1000_3" class="category_button" onclick="open_modal_question_1000_3()" type="button">1000</button>
        <div id="modal_container_1000_3" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_1000_3 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_1000_3 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick1000G1()>1000</label></td>
                            <td><label class="save_play_button" onclick=buttonClick1000G2()>1000</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_1000_3()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="1000_4" class="category_button" onclick="open_modal_question_1000_4()" type="button">1000</button>
        <div id="modal_container_1000_4" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_1000_4 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_1000_4 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick1000G1()>1000</label></td>
                            <td><label class="save_play_button" onclick=buttonClick1000G2()>1000</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_1000_4()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="1000_5" class="category_button" onclick="open_modal_question_1000_5()" type="button">1000</button>
        <div id="modal_container_1000_5" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_1000_5 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_1000_5 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick1000G1()>1000</label></td>
                            <td><label class="save_play_button" onclick=buttonClick1000G2()>1000</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_1000_5()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
        <button id="1000_6" class="category_button" onclick="open_modal_question_1000_6()" type="button">1000</button>
        <div id="modal_container_1000_6" class="modal_container">
            <div class="modal">
                <form id="modal_input" method="post">
                    <div class="modal_question_container">
                        <label id="modal_question" for="modal_question">Question:</label>
                        <label id="question" for="modal_question"><?php echo $question_1000_6 ?></label>
                        <label id="modal_question" for="modal_question">Answer:</label>
                    </div>
                    <div class="show_answer">
                        <label id="answer" for="modal_question"><?php echo $answer_1000_6 ?></label>
                    </div>
                    <label id="modal_question" for="modal_question">Who Won?</label>
                    <table class="result_table_play">
                        <tr>
                            <th><label><?php echo $group_name_one ?></label></th>
                            <th><label><?php echo $group_name_two ?></label></th>
                        </tr>
                        <tr>
                            <td><label class="save_play_button" onclick=buttonClick1000G1()>1000</label></td>
                            <td><label class="save_play_button" onclick=buttonClick1000G2()>1000</label></td>
                        </tr>
                    </table>
                    <button class="save_play" type="button" onclick="close_modal_question_1000_6()">Close</button>
                    <button class="save_play" type="button" onclick="show_answer()">Show Answer</button>
                </form>
            </div>
        </div>
    </div>
<!--     <script src="../javascript/script.js"></script>
 -->    <script src="../Jeopardy/javascript/script.js"></script>
</body>
</html>