<?php

require_once 'requires/config.php';
require_once 'requires/post.php';
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
  <link rel="stylesheet" href="../SDEV265-Project/css/style.css">
</head>

<body>
<div class="button_holder">
    <label class="save" for="submit-form" tabindex="0">Save</label>
    <a class="save" href="index.php">Play</a>
    <a href="logout.php" class="logout">Log Out</a>
  </div>
  <form method="post">
  <div class="group_scores_container_edit">
      <label class="group_classs">Group Names:</label>
    </div>
    <div class="group_scores_container_edit">
        <input name="group_name_one" class="group" placeholder="Enter a Group Name" value="<?php echo $group_name_one ?>" />
        <input name="group_name_two" class="group" placeholder="Enter a Group Name" value="<?php echo $group_name_two ?>" />
    </div>
    <div class="game_title_containter">
      <input class="game_title" name="game_title" value="<?php echo $game_title ?>" id="game_title"
        placeholder="Enter a Title" />
    </div>
    <div class="category_container">
      <textarea class="text_area_category" id="row_one_col_one" name="row_one_col_one"
        placeholder="Enter Category Name"><?php echo $category_one ?></textarea>
      <textarea class="text_area_category" id="row_one_col_two" name="row_one_col_two"
        placeholder="Enter Category Name"><?php echo $category_two ?></textarea>
      <textarea class="text_area_category" id="row_one_col_three" name="row_one_col_three"
        placeholder="Enter Category Name"><?php echo $category_three ?></textarea>
      <textarea class="text_area_category" id="row_one_col_four" name="row_one_col_four"
        placeholder="Enter Category Name"><?php echo $category_four ?></textarea>
      <textarea class="text_area_category" id="row_one_col_five" name="row_one_col_five"
        placeholder="Enter Category Name"><?php echo $category_five ?></textarea>
      <textarea class="text_area_category" id="row_one_col_six" name="row_one_col_six"
        placeholder="Enter Category Name"><?php echo $category_six ?></textarea>
    </div>
    <input type="submit" id="submit-form" class="hidden" />
    </div>
  </form>
  <table class="result_table">
    <tr>
      <th>
        <div class="row_one">
          <label id="200_1" class="category_label" onclick="open_modal_question_200_1()" type="button">200</label>
          <div id="modal_container_200_1" class="modal_container">
            <div class="modal">
              <form id="modal_input" method="post">
                <div class="modal_question_container">
                  <label id="modal_question" for="modal_question">Enter your Question</label>
                  <textarea class="modal_question" name="question_200_1" placeholder="Enter your Question" rows="4"
                    cols="50"></textarea>
                  <label id="modal_question" for="modal_question">Enter your Answer</label>
                  <textarea class="modal_question" name="answer_200_1" placeholder="Enter your Answer" rows="4"
                    cols="50"></textarea>
                </div>
                <button class="save" type="submit">Save</button>
                <button class="save" type="button" onclick="close_modal_question_200_1()">Close</button>
              </form>
            </div>
          </div>
      </th>
      <th>
        <label id="200_2" class="category_label" onclick="open_modal_question_200_2()" type="button">200</label>
        <div id="modal_container_200_2" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_200_2" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_200_2" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_200_2()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="200_3" class="category_label" onclick="open_modal_question_200_3()" type="button">200</label>
        <div id="modal_container_200_3" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_200_3" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_200_3" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_200_3()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="200_4" class="category_label" onclick="open_modal_question_200_4()" type="button">200</label>
        <div id="modal_container_200_4" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_200_4" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_200_4" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_200_4()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="200_5" class="category_label" onclick="open_modal_question_200_5()" type="button">200</label>
        <div id="modal_container_200_5" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_200_5" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_200_5" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_200_5()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="200_6" class="category_label" onclick="open_modal_question_200_6()" type="button">200</label>
        <div id="modal_container_200_6" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_200_6" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_200_6" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_200_6()">Close</button>
            </form>
          </div>
        </div>
        </div>
      </th>
    </tr>
    <tr>
      <td>Question: <?php echo $question_200_1 ?></td>
      <td>Question: <?php echo $question_200_2 ?></td>
      <td>Question: <?php echo $question_200_3 ?></td>
      <td>Question: <?php echo $question_200_4 ?></td>
      <td>Question: <?php echo $question_200_5 ?></td>
      <td>Question: <?php echo $question_200_6 ?></td>
    </tr>
    <tr>
      <td>Answer: <?php echo $answer_200_1 ?></td>
      <td>Answer: <?php echo $answer_200_2 ?></td>
      <td>Answer: <?php echo $answer_200_3 ?></td>
      <td>Answer: <?php echo $answer_200_4 ?></td>
      <td>Answer: <?php echo $answer_200_5 ?></td>
      <td>Answer: <?php echo $answer_200_6 ?></td>

    </tr>
    <tr>
      <th>
        <div class="row_two">
          <label id="400_1" class="category_label" onclick="open_modal_question_400_1()" type="button">400</label>
          <div id="modal_container_400_1" class="modal_container">
            <div class="modal">
              <form id="modal_input" method="post">
                <div class="modal_question_container">
                  <label id="modal_question" for="modal_question">Enter your Question</label>
                  <textarea class="modal_question" name="question_400_1" placeholder="Enter your Question" rows="4"
                    cols="50"></textarea>
                  <label id="modal_question" for="modal_question">Enter your Answer</label>
                  <textarea class="modal_question" name="answer_400_1" placeholder="Enter your Answer" rows="4"
                    cols="50"></textarea>
                </div>
                <button class="save" type="submit">Save</button>
                <button class="save" type="button" onclick="close_modal_question_400_1()">Close</button>
              </form>
            </div>
          </div>
      </th>
      <th>
        <label id="400_2" class="category_label" onclick="open_modal_question_400_2()" type="button">400</label>
        <div id="modal_container_400_2" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_400_2" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_400_2" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_400_2()">Close</button>
            </form>
          </div>
        </div>
      </th>>
      <th>
        <label id="400_3" class="category_label" onclick="open_modal_question_400_3()" type="button">400</label>
        <div id="modal_container_400_3" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_400_3" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_400_3" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_400_3()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="400_4" class="category_label" onclick="open_modal_question_400_4()" type="button">400</label>
        <div id="modal_container_400_4" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_400_4" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_400_4" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_400_4()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="400_5" class="category_label" onclick="open_modal_question_400_5()" type="button">400</label>
        <div id="modal_container_400_5" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_400_5" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_400_5" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_400_5()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="400_6" class="category_label" onclick="open_modal_question_400_6()" type="button">400</label>
        <div id="modal_container_400_6" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_400_6" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_400_6" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_400_6()">Close</button>
            </form>
          </div>
        </div>
        </div>
      </th>
    </tr>
    <tr>
      <td>Question: <?php echo $question_400_1 ?></td>
      <td>Question: <?php echo $question_400_2 ?></td>
      <td>Question: <?php echo $question_400_3 ?></td>
      <td>Question: <?php echo $question_400_4 ?></td>
      <td>Question: <?php echo $question_400_5 ?></td>
      <td>Question: <?php echo $question_400_6 ?></td>
    </tr>
    <tr>
      <td>Answer: <?php echo $answer_400_1 ?></td>
      <td>Answer: <?php echo $answer_400_2 ?></td>
      <td>Answer: <?php echo $answer_400_3 ?></td>
      <td>Answer: <?php echo $answer_400_4 ?></td>
      <td>Answer: <?php echo $answer_400_5 ?></td>
      <td>Answer: <?php echo $answer_400_6 ?></td>
    </tr>
    </tr>
    <tr>
      <th>
        <div class="row_three">
          <label id="600_1" class="category_label" onclick="open_modal_question_600_1()" type="button">600</label>
          <div id="modal_container_600_1" class="modal_container">
            <div class="modal">
              <form id="modal_input" method="post">
                <div class="modal_question_container">
                  <label id="modal_question" for="modal_question">Enter your Question</label>
                  <textarea class="modal_question" name="question_600_1" placeholder="Enter your Question" rows="4"
                    cols="50"></textarea>
                  <label id="modal_question" for="modal_question">Enter your Answer</label>
                  <textarea class="modal_question" name="answer_600_1" placeholder="Enter your Answer" rows="4"
                    cols="50"></textarea>
                </div>
                <button class="save" type="submit">Save</button>
                <button class="save" type="button" onclick="close_modal_question_600_1()">Close</button>
              </form>
            </div>
          </div>
      </th>
      <th>
        <label id="600_2" class="category_label" onclick="open_modal_question_600_2()" type="button">600</label>
        <div id="modal_container_600_2" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question?</label>
                <textarea class="modal_question" name="question_600_2" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer?</label>
                <textarea class="modal_question" name="answer_600_2" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_600_2()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="600_3" class="category_label" onclick="open_modal_question_600_3()" type="button">600</label>
        <div id="modal_container_600_3" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_600_3" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_600_3" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_600_3()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="600_4" class="category_label" onclick="open_modal_question_600_4()" type="button">600</label>
        <div id="modal_container_600_4" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_600_4" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_600_4" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_600_4()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="600_5" class="category_label" onclick="open_modal_question_600_5()" type="button">600</label>
        <div id="modal_container_600_5" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_600_5" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_600_5" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_600_5()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="600_6" class="category_label" onclick="open_modal_question_600_6()" type="button">600</label>
        <div id="modal_container_600_6" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_600_6" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_600_6" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_600_6()">Close</button>
            </form>
          </div>
        </div>
        </div>
    </tr>
    <tr>
      <td>Question: <?php echo $question_600_1 ?></td>
      <td>Question: <?php echo $question_600_2 ?></td>
      <td>Question: <?php echo $question_600_3 ?></td>
      <td>Question: <?php echo $question_600_4 ?></td>
      <td>Question: <?php echo $question_600_5 ?></td>
      <td>Question: <?php echo $question_600_6 ?></td>
    </tr>
    <tr>
      <td>Answer: <?php echo $answer_600_1 ?></td>
      <td>Answer: <?php echo $answer_600_2 ?></td>
      <td>Answer: <?php echo $answer_600_3 ?></td>
      <td>Answer: <?php echo $answer_600_4 ?></td>
      <td>Answer: <?php echo $answer_600_5 ?></td>
      <td>Answer: <?php echo $answer_600_6 ?></td>
    </tr>
    <tr>
      <th>
        <div class="row_four">
          <label id="800_1" class="category_label" onclick="open_modal_question_800_1()" type="button">800</label>
          <div id="modal_container_800_1" class="modal_container">
            <div class="modal">
              <form id="modal_input" method="post">
                <div class="modal_question_container">
                  <label id="modal_question" for="modal_question">Enter your Question</label>
                  <textarea class="modal_question" name="question_800_1" placeholder="Enter your Question" rows="4"
                    cols="50"></textarea>
                  <label id="modal_question" for="modal_question">Enter your Answer</label>
                  <textarea class="modal_question" name="answer_800_1" placeholder="Enter your Answer" rows="4"
                    cols="50"></textarea>
                </div>
                <button class="save" type="submit">Save</button>
                <button class="save" type="button" onclick="close_modal_question_800_1()">Close</button>
              </form>
            </div>
          </div>
      </th>
      <th>
        <label id="800_2" class="category_label" onclick="open_modal_question_800_2()" type="button">800</label>
        <div id="modal_container_800_2" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_800_2" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_800_2" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_800_2()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="800_3" class="category_label" onclick="open_modal_question_800_3()" type="button">800</label>
        <div id="modal_container_800_3" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_800_3" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_800_3" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_800_3()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="800_4" class="category_label" onclick="open_modal_question_800_4()" type="button">800</label>
        <div id="modal_container_800_4" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_800_4" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_800_4" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_800_4()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="800_5" class="category_label" onclick="open_modal_question_800_5()" type="button">800</label>
        <div id="modal_container_800_5" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_800_5" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_800_5" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_800_5()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="800_6" class="category_label" onclick="open_modal_question_800_6()" type="button">800</label>
        <div id="modal_container_800_6" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_800_6" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_800_6" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_800_6()">Close</button>
            </form>
          </div>
        </div>
        </div>
      </th>
    </tr>
    <tr>
      <td>Question: <?php echo $question_800_1 ?></td>
      <td>Question: <?php echo $question_800_2 ?></td>
      <td>Question: <?php echo $question_800_3 ?></td>
      <td>Question: <?php echo $question_800_4 ?></td>
      <td>Question: <?php echo $question_800_5 ?></td>
      <td>Question: <?php echo $question_800_6 ?></td>
    </tr>
    <tr>
      <td>Answer: <?php echo $answer_800_1 ?></td>
      <td>Answer: <?php echo $answer_800_2 ?></td>
      <td>Answer: <?php echo $answer_800_3 ?></td>
      <td>Answer: <?php echo $answer_800_4 ?></td>
      <td>Answer: <?php echo $answer_800_5 ?></td>
      <td>Answer: <?php echo $answer_800_6 ?></td>
    </tr>
    <tr>
      <th>
        <div class="row_five">
          <label id="1000_1" class="category_label" onclick="open_modal_question_1000_1()" type="button">1000</label>
          <div id="modal_container_1000_1" class="modal_container">
            <div class="modal">
              <form id="modal_input" method="post">
                <div class="modal_question_container">
                  <label id="modal_question" for="modal_question">Enter your Question</label>
                  <textarea class="modal_question" name="question_1000_1" placeholder="Enter your Question" rows="4"
                    cols="50"></textarea>
                  <label id="modal_question" for="modal_question">Enter your Answer</label>
                  <textarea class="modal_question" name="answer_1000_1" placeholder="Enter your Answer" rows="4"
                    cols="50"></textarea>
                </div>
                <button class="save" type="submit">Save</button>
                <button class="save" type="button" onclick="close_modal_question_1000_1()">Close</button>
              </form>
            </div>
          </div>
      </th>
      <th>
        <label id="1000_2" class="category_label" onclick="open_modal_question_1000_2()" type="button">1000</label>
        <div id="modal_container_1000_2" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_1000_2" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_1000_2" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_1000_2()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="1000_3" class="category_label" onclick="open_modal_question_1000_3()" type="button">1000</label>
        <div id="modal_container_1000_3" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_1000_3" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_1000_3" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_1000_3()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="1000_4" class="category_label" onclick="open_modal_question_1000_4()" type="button">1000</label>
        <div id="modal_container_1000_4" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_1000_4" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_1000_4" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_1000_4()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="1000_5" class="category_label" onclick="open_modal_question_1000_5()" type="button">1000</label>
        <div id="modal_container_1000_5" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_1000_5" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_1000_5" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_1000_5()">Close</button>
            </form>
          </div>
        </div>
      </th>
      <th>
        <label id="1000_6" class="category_label" onclick="open_modal_question_1000_6()" type="button">1000</label>
        <div id="modal_container_1000_6" class="modal_container">
          <div class="modal">
            <form id="modal_input" method="post">
              <div class="modal_question_container">
                <label id="modal_question" for="modal_question">Enter your Question</label>
                <textarea class="modal_question" name="question_1000_6" placeholder="Enter your Question" rows="4"
                  cols="50"></textarea>
                <label id="modal_question" for="modal_question">Enter your Answer</label>
                <textarea class="modal_question" name="answer_1000_6" placeholder="Enter your Answer" rows="4"
                  cols="50"></textarea>
              </div>
              <button class="save" type="submit">Save</button>
              <button class="save" type="button" onclick="close_modal_question_1000_6()">Close</button>
            </form>
          </div>
        </div>
      </th>
    </tr>
    <tr>
      <td>Question: <?php echo $question_1000_1 ?></td>
      <td>Question: <?php echo $question_1000_2 ?></td>
      <td>Question: <?php echo $question_1000_3 ?></td>
      <td>Question: <?php echo $question_1000_4 ?></td>
      <td>Question: <?php echo $question_1000_5 ?></td>
      <td>Question: <?php echo $question_1000_6 ?></td>
    </tr>
    <tr>
      <td>Answer: <?php echo $answer_1000_1 ?></td>
      <td>Answer: <?php echo $answer_1000_2 ?></td>
      <td>Answer: <?php echo $answer_1000_3 ?></td>
      <td>Answer: <?php echo $answer_1000_4 ?></td>
      <td>Answer: <?php echo $answer_1000_5 ?></td>
      <td>Answer: <?php echo $answer_1000_6 ?></td>
    </tr>
  </table>
  </div>
  </div>
  </div>
  </div>
    <script src="../SDEV265-Project/javascript/script.js"></script>
</body>
</html>