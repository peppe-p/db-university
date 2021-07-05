# GROUP BY

## Contare quanti iscritti ci sono stati ogni anno
SELECT COUNT(id) AS n_iscrizioni, year(enrolment_date) as anno FROM students GROUP BY anno

## Contare gli insegnanti che hanno l'ufficio nello stesso edificio
SELECT COUNT(id) AS n_persone, office_address FROM teachers GROUP BY office_address

## Calcolare la media dei voti di ogni appello d'esame
SELECT COUNT(student_id) AS id_studente, AVG(vote) AS media FROM exam_student GROUP BY student_id

## Contare quanti corsi di laurea ci sono per ogni dipartimento
SELECT COUNT(id) AS n_corsi, department_id AS id_dipartimento FROM degrees GROUP BY department_id