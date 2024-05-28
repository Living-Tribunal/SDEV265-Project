DROP TABLE IF EXISTS game_title;
DROP TABLE IF EXISTS column_one;
DROP TABLE IF EXISTS column_two;
DROP TABLE IF EXISTS column_three;
DROP TABLE IF EXISTS column_four;
DROP TABLE IF EXISTS column_five;
DROP TABLE IF EXISTS column_six;

DROP TABLE IF EXISTS group_name;

CREATE TABLE IF NOT EXISTS game_title(
    id INTEGER PRIMARY KEY CHECK (id = 1),
    title TEXT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS group_name (
    id INTEGER PRIMARY KEY CHECK (id = 1),
    team_one TEXT NULL,
    team_two TEXT NULL
);

CREATE TABLE IF NOT EXISTS column_one (
    id INTEGER PRIMARY KEY CHECK (id = 1),
    category_one TEXT NULL,
    question_one_col_one TEXT NULL,
    answer_one_col_one TEXT NULL,
    question_two_col_one TEXT NULL,
    answer_two_col_one TEXT NULL,
    question_three_col_one TEXT NULL,
    answer_three_col_one TEXT NULL,
    question_four_col_one TEXT NULL,
    answer_four_col_one TEXT NULL,
    question_five_col_one TEXT NULL,
    answer_five_col_one TEXT NULL
);

CREATE TABLE IF NOT EXISTS column_two (
    id INTEGER PRIMARY KEY CHECK (id = 1),
    category_two TEXT NULL,
    question_one_col_two TEXT NULL,
    answer_one_col_two TEXT NULL,
    question_two_col_two TEXT NULL,
    answer_two_col_two TEXT NULL,
    question_three_col_two TEXT NULL,
    answer_three_col_two TEXT NULL,
    question_four_col_two TEXT NULL,
    answer_four_col_two TEXT NULL,
    question_five_col_two TEXT NULL,
    answer_five_col_two TEXT NULL
);

CREATE TABLE IF NOT EXISTS column_three (
    id INTEGER PRIMARY KEY CHECK (id = 1),
    category_three TEXT NULL,
    question_one_col_three TEXT NULL,
    answer_one_col_three TEXT NULL,
    question_two_col_three TEXT NULL,
    answer_two_col_three TEXT NULL,
    question_three_col_three TEXT NULL,
    answer_three_col_three TEXT NULL,
    question_four_col_three TEXT NULL,
    answer_four_col_three TEXT NULL,
    question_five_col_three TEXT NULL,
    answer_five_col_three TEXT NULL
);

CREATE TABLE IF NOT EXISTS column_four (
    id INTEGER PRIMARY KEY CHECK (id = 1),
    category_four TEXT NULL,
    question_one_col_four TEXT NULL,
    answer_one_col_four TEXT NULL,
    question_two_col_four TEXT NULL,
    answer_two_col_four TEXT NULL,
    question_three_col_four TEXT NULL,
    answer_three_col_four TEXT NULL,
    question_four_col_four TEXT NULL,
    answer_four_col_four TEXT NULL,
    question_five_col_four TEXT NULL,
    answer_five_col_four TEXT NULL
);

CREATE TABLE IF NOT EXISTS column_five (
    id INTEGER PRIMARY KEY CHECK (id = 1),
    category_five TEXT NULL,
    question_one_col_five TEXT NULL,
    answer_one_col_five TEXT NULL,
    question_two_col_five TEXT NULL,
    answer_two_col_five TEXT NULL,
    question_three_col_five TEXT NULL,
    answer_three_col_five TEXT NULL,
    question_four_col_five TEXT NULL,
    answer_four_col_five TEXT NULL,
    question_five_col_five TEXT NULL,
    answer_five_col_five TEXT NULL
);

CREATE TABLE IF NOT EXISTS column_six (
    id INTEGER PRIMARY KEY CHECK (id = 1),
    category_six TEXT NULL,
    question_one_col_six TEXT NULL,
    answer_one_col_six TEXT NULL,
    question_two_col_six TEXT NULL,
    answer_two_col_six TEXT NULL,
    question_three_col_six TEXT NULL,
    answer_three_col_six TEXT NULL,
    question_four_col_six TEXT NULL,
    answer_four_col_six TEXT NULL,
    question_five_col_six TEXT NULL,
    answer_five_col_six TEXT NULL
);

INSERT INTO game_title DEFAULT VALUES;
INSERT INTO column_one DEFAULT VALUES;
INSERT INTO column_two DEFAULT VALUES;
INSERT INTO column_three DEFAULT VALUES;
INSERT INTO column_four DEFAULT VALUES;
INSERT INTO column_five DEFAULT VALUES;
INSERT INTO column_six DEFAULT VALUES;

INSERT INTO group_name DEFAULT VALUES;