use aeroportprivat
create table logare(
  id int not null primary key,
  login nvarchar(20) not null,
  parola nvarchar(20),
  email nvarchar(100),
  activ int(1)
);