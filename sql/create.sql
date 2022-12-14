CREATE DATABASE bookstore;
CREATE TABLE bookstore.books (
    id integer not null auto_increment unique,
    title varchar(50) not null,
    author varchar(50) not null,
    pdate integer not null,
    price double(5, 2) not null,
    primary key (id)
);
