# IoTRaspberry
### IoT Internet of Things
### 12.9.2022 Suunnitelma
### Projekti on tulossa
![alt text](https://user-images.githubusercontent.com/113332647/189599208-ddef9db7-ffe7-4479-b46c-4af63731b899.jpg)
![alt text](https://user-images.githubusercontent.com/113332647/189601623-9b14cc20-2b0e-4689-a565-15080d1b61d0.png) 

# Projekti (Roope, Leo, David)

### 13.9 'We started the installation of the raspberry but we are stuck right now on the Testing of the server'

## 15.9 'Now the server is working'


### How to connect a Motion Sensor to raspberry?

There is a proper way to connect a motion sensor to the raspberry, you have to carefully check. We are learning how to do a database on MySQL:

![image](https://user-images.githubusercontent.com/113332647/190371368-235e2e4e-9b66-4845-a38b-0fc964848e4c.png)



### HOW TO CREATE DATABASES IN MySQL language 

OPEN THE: sudo mariadb

TO CREATE DATABASE: CREATE DATABASE DAVID_Liike;

Use the database already created: USE DAVID_LIIKE

Create the format: CREATE TABLE DAVID_Liike (id int AUTO_INCREMENT NOT NULL PRIMARY KEY, arvo boolean, aika datetime);

Then you have to insert the values: INSTERT INTO DAVID_Liike (arvo, aika) VALUES (true, now());

This shows the table: SELECT*FROM DAVID_Liike

Everytime that you want to insert some data you have to use this: INSERT INTO DAVID_Liike (arvo, aika) VALUES (false, now());

And then show it: SELECT*FROM DAVID_Liike
