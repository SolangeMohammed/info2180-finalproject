USE bugme; 
CREATE TABLE Issues(
    id INT AUTO_INCREMENT,
    title VARCHAR(24),
    description TEXT,
    type VARCHAR(12),
    priority VARCHAR(12),
    status VARCHAR(8),
    assigned_to INT,
    created_by INT,
    created DATETIME,
    updated DATETIME,
    PRIMARY KEY(id));