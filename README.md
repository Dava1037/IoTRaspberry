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
![image](https://user-images.githubusercontent.com/113332647/190372655-f6af9dcf-3fec-49df-be42-9ba9d3713de8.png)




### HOW TO CREATE DATABASES IN MySQL language 

OPEN THE: sudo mariadb

TO CREATE DATABASE: CREATE DATABASE DAVID_Liike;

Use the database already created: USE DAVID_LIIKE

Create the format: CREATE TABLE DAVID_Liike (id int AUTO_INCREMENT NOT NULL PRIMARY KEY, arvo boolean, aika datetime);

Then you have to insert the values: INSTERT INTO DAVID_Liike (arvo, aika) VALUES (true, now());

This shows the table: SELECT*FROM DAVID_Liike

Everytime that you want to insert some data you have to use this: INSERT INTO DAVID_Liike (arvo, aika) VALUES (false, now());

And then show it: SELECT*FROM DAVID_Liike

### 16.9
We connected the arduino uno to the raspberry and try to make them work together.
With this code line you can make them connect after installing the arduino in the Raspberry. This is in python: 

#!/usr/bin/env python3
import serial

if __name__ == '__main__':
  ser = serial.Serrial('/dev/ttyACM0', 9600, timeout=1)
  ser.reset_input_buffer()
  
  while True:
    if ser.in_waiting > 0:
      line = ser.readline().decode('utf-8).rstrip()
      print(line)
### Also
On the ardiuno platform we had to open a new sketch and create the order to run the arduino serial:

void setup() {

Serial.begin(9600);
}

//with this you can make it repeat the serial as a loop and we noticed that changing the value in the delay makes it faster or slower when you check the  Sarjamonitori in the Ardiuno program 
void loop() {
Serial.println("Arduino");
delay(100);
}
