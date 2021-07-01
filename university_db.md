# University DB
# #################################

# DIPARTIMENTI
**id**              BIGINT          NOTNULL     AUTO_INCREMENT  UNIQU
**dep_name**        VARCHAR(50)     NOTNULL     UNIQUE
**cours_id**        SMALLINT        NOTNULL     UNIQUE

# CORSI
**id**              BIGINT          NOTNULL     AUTO_INCREMENT  UNIQUE
**cours_name**      VARCHAR(50)     NOTNULL     UNIQUE


# DOCENTI
**id**              BIGINT          NOTNULL     AUTO_INCREMENT  UNIQUE
**name**            VARCHAR(30)     NOTNULL
**last_name**       VARCHAR(30)     NOTNULL
**cours_id**        SMALLINT        NOTNULL

# STUDENTS
**id**              BIGINT          NOTNULL     AUTO_INCREMENT  UNIQUE
**name**            VARCHAR(30)     NOTNULL
**last_name**       VARCHAR(30)     NOTNULL
**cours_id**        SMALLINT        NOTNULL


# TEST
**id**              BIGINT          NOTNULL     AUTO_INCREMENT  UNIQUE
**cours_id**        SMALLINT        NOTNULL
**student_id**      SMALLINT        NOTNULL
**docent_id**       SMALLINT        NOTNULL
**vote_rate**       TINYINT(110)    NOTNULL
**passed**          TINYINT(2)      NOTNULL
