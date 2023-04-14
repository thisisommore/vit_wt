CREATE TABLE PATIENT(
    Id varchar(200) PRIMARY KEY,
    Name varchar(200),
    EmailId varchar(200) UNIQUE
);

CREATE TABLE PATIENT_APPOINTMENT(
    Id varchar(200) PRIMARY KEY,
    PatientId varchar(200),
    Description varchar(200),
    FOREIGN KEY (PatientId) REFERENCES PATIENT(Id)
);

