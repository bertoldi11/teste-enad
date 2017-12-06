create table course
(
  idcourse int auto_increment
    primary key,
  idinstitution int not null,
  name varchar(128) not null,
  coursegrade float not null,
  studentgrade float not null
)
  engine=InnoDB
;

create index course_institution___fk
  on course (idinstitution)
;

create table institution
(
  idinstitution int auto_increment
    primary key,
  name varchar(128) null,
  grade float not null
)
  engine=InnoDB
;

alter table course
  add constraint course_institution___fk
foreign key (idinstitution) references institution (idinstitution)
;