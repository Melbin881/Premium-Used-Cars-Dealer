use premuim_user_cars_dealer;

CREATE TABLE dealership (
  dealership_id INT NOT NULL AUTO_INCREMENT,
  address VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  state VARCHAR(255) NOT NULL,
  pincode VARCHAR(10) NOT NULL,
  phone_number VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL,
  PRIMARY KEY (dealership_id)
);



CREATE TABLE car (
  registration_no VARCHAR(20) PRIMARY KEY,
  make VARCHAR(50),
  model VARCHAR(50),
  year INT,
  odo INT,
  engine_no VARCHAR(50),
  price DECIMAL(10,2),
  location VARCHAR(100),
  color VARCHAR(50),
  body_type VARCHAR(50),
  engine_type VARCHAR(50),
  transmission_type VARCHAR(50),
  num_previous_owners INT,
  service_history VARCHAR(3),
  accident_history VARCHAR(3),
  dealer_id INT,
  FOREIGN KEY (dealer_id) REFERENCES dealership(dealership_id)
);

INSERT INTO car (registration_no, make, model, year, odo, engine_no, price, location, color, body_type, engine_type, transmission_type, num_previous_owners, service_history, accident_history, dealer_id)
VALUES
  ('MH 01 AB 1234', 'BMW', '3 Series', 2018, 5000, 'E123456', 2500000, 'Mumbai', 'Black', 'Sedan', 'Petrol', 'Automatic', 1, 'Yes', 'No', 1),
  ('DL 02 CD 5678', 'Audi', 'A4', 2019, 8000, 'A987654', 2800000, 'Delhi', 'White', 'Sedan', 'Diesel', 'Automatic', 2, 'Yes', 'Yes', 2),
  ('KA 03 EF 9012', 'Mercedes-Benz', 'C-Class', 2020, 6000, 'M654321', 3000000, 'Bangalore', 'Silver', 'Sedan', 'Petrol', 'Automatic', 1, 'Yes', 'No', 3),
  ('WB 04 GH 3456', 'Jaguar', 'F-Type', 2017, 20000, 'J123456', 3500000, 'Kolkata', 'Blue', 'Coupe', 'Petrol', 'Automatic', 1, 'No', 'Yes', 4),
  ('TN 05 IJ 7890', 'Porsche', '911', 2016, 15000, 'P987654', 4000000, 'Chennai', 'Red', 'Coupe', 'Petrol', 'Manual', 2, 'Yes', 'No', 5),
  ('MH 06 KL 2345', 'BMW', 'X5', 2020, 10000, 'B654321', 4500000, 'Mumbai', 'White', 'SUV', 'Diesel', 'Automatic', 1, 'Yes', 'No', 6),
  ('DL 07 MN 6789', 'Audi', 'Q7', 2019, 12000, 'A123456', 3800000, 'Delhi', 'Grey', 'SUV', 'Petrol', 'Automatic', 1, 'Yes', 'Yes', 7),
  ('KA 08 OP 0123', 'Mercedes-Benz', 'GLE', 2018, 9000, 'M987654', 4200000, 'Bangalore', 'Black', 'SUV', 'Diesel', 'Automatic', 2, 'No', 'No', 8),
  ('WB 09 QR 3456', 'Land Rover', 'Range Rover', 2021, 3000, 'L654321', 5500000, 'Kolkata', 'White', 'SUV', 'Petrol', 'Automatic', 1, 'Yes', 'No', 9),
  ('TN 10 ST 6789', 'Jaguar', 'I-PACE', 2022, 1000, 'J987654', 6000000, 'Chennai', 'Blue', 'SUV', 'Electric', 'Automatic', 1, 'Yes', 'No', 10);

show tables;