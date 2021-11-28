USE bugme; 
CREATE TABLE Users(
    id INT AUTO_INCREMENT,
    firstname VARCHAR,
    lastname VARCHAR,
    password VARCHAR,
    email VARCHAR,
    date_joined DATETIME,
    PRIMARY KEY(id)); 