CREATE TABLE `students` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` CHAR(6) NOT NULL,
    `dob` DATE NOT NULL,
    `age` TINYINT UNSIGNED NOT NULL,
    `course_id` INT UNSIGNED NOT NULL
);

CREATE TABLE courses (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL
);

INSERT INTO courses (name) VALUES 
('PHP'),
('JS'),
('C#'),
('JAVA');

INSERT INTO students (name,email,gender,dob,age,course_id) VALUES 
('rider','rider@gmail.com','male','2000-07-30',23,1),
('mgmg','mgmg@gmail.com','male','2000-07-30',23,2),
('hlahla','hlahla@gmail.com','female','2000-07-30',23,2),
('ayeaye','ayeaye@gmail.com','female','2000-07-30',23,3),
('zawzaw','zawzaw@gmail.com','male','2000-07-30',23,1);

SELECT *
FROM courses
LEFT JOIN students ON students.course_id = courses.id
UNION
SELECT *
FROM courses
RIGHT JOIN students ON students.course_id = courses.id;
