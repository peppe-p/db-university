# JOINS

## Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia
SELECT * 
FROM students
JOIN degrees
ON degrees.id = students.degree_id
WHERE degrees.name = 'Corso di Laurea in Economia';

## Selezionare tutti i Corsi di Laurea del 
SELECT degrees.id AS id_corso, degrees.name AS nome_corso, degrees.level, degrees.address, degrees.email, degrees.website, departments.name
FROM degrees
JOIN departments
ON departments.id = degrees.department_id
WHERE departments.name = 'Dipartimento di Neuroscienze';


## Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)
SELECT teachers.id AS id_teacher, teachers.name, teachers.surname, courses.id AS id_corso, courses.name AS nome_corso
FROM course_teacher
JOIN courses
ON course_id = courses.id
JOIN teachers
ON teacher_id = teachers.id
WHERE teachers.id = 44;

## Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e nome
SELECT students.id AS id_student, students.name, students.surname, students.fiscal_code, students.registration_number, degrees.id AS id_corso, degrees.name AS nome_corso, departments.id AS id_dipartimento, departments.name AS nome_dipartimento
FROM students
JOIN degrees
ON degree_id = degrees.id
JOIN departments
ON department_id = departments.id
ORDER BY students.name, students.surname ASC

## Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti

## Selezionare tutti i docenti che insegnano nel Dipartimento di Matematica (54)
