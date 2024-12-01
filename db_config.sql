CREATE DATABASE certification_applications;
USE certification_applications;

CREATE TABLE applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(255),
    company_address VARCHAR(255),
    contact_name VARCHAR(255),
    job_position VARCHAR(255),
    mobile_no VARCHAR(15),
    telephone_no VARCHAR(15),
    fax_no VARCHAR(15),
    email VARCHAR(255),
    website VARCHAR(255),
    standards TEXT,
    scope_work TEXT,
    main_activities TEXT,
    legal_requirements TEXT,
    total_employees INT,
    admin_employees INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
