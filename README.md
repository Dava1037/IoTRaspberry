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

## 19.9

![19 9](https://user-images.githubusercontent.com/113332647/190959801-6cb33bf7-d398-4918-b0a8-f9078bc98aa8.jpg)
(Python)
import time

while True:
  try:
      time.sleep(3)
      print("Testi")
  except:
      print("Ei toimi")

### Edit the database made in MySQL from python code

import time
import mariadb

try:
    while True:
        time.sleep
        cur.execute("INSERT INTO ESIMERKKI(arvo) values (3)")
        conn.comit()
        print("Koodi toimi")
        
except:
    print("ei toimi")
    
conn.close()


cur.execute(f"INSERT INTO liike_tbl(arvo,aika) VALUES (?, ?)", (result, datetime.datetime.now()))
        conn.commit()

## 20.9

### Selvittäkää mitä tarkoitavat:
EEPROM: EEPROM tai E²PROM (engl. Electronically Erasable Programmable Read-Only Memory) on haihtumatonta puolijohdemuistia, joka voidaan uudelleenkirjoittaa n. 10 000–100 000 kertaa. EEPROM-muistia käytetään pääasiassa asetustietojen tallentamiseen mikroprosessorin tai mikrokontrollerin sisältävissä laitteissa.

UART: Se on lyhenne sanoista: Universal asynchronus reciever and transmission, tarkoittaa sarjaliikenne protokollaa, joka tapahtuu kahdella linjalla tai digitaalisella nastalla, jotka ovat RX (nasta0) ja TX nasta1).

Arduino sisältää USB-sarjamuuntimen, joka avulla mikro-ohjain alijärjestelmä voi olla suoran yhteydessä tietokoneeseen (esim raspberry PI:hin)

-I2C: Sarjaliikenne protokolla, jota käytetään yleisesti anturipohjaisissa projekteissa. I2C mahdollistaa selkeän tiedonsiirtoreitin ydinpiirin ja ohjainpiirin välillä.

-SPI: Serial peripheral interface. Tätä yleisesti käytetään, kun halutaan kahden mikro-ohjaimen keskustelevan keskenään

Mitä eroa I2C ja SIP:llä: 

apt-get update

clear

date

find/ -name esimerkki.txt

nano example.txt

poweroff

raspi-config

reboot

shutdown -h 01:22:

startx


cat esimerkki.txt

cd/abc/xyz

|s -|

mkdir esimerkki:_polku

mv XXX
rm esimekki

scp use"´@10.0.0.32:/sine/path/tiedosto.txt

touch example.txt


ifconfig

iwconfig

iwlist wlan0 grep ESSID

nmap

ping

wget http://www.website.com/example.txt



cat/proc/meminfo

cat/proc/partions

cat/proc/version

df -h

df /

dpkg--get-selections| grep XXX

dpkg--get-selections

free

hostname -I

Isusb

UP key

vcgenmd measure_temp

vcgencmd get_mem am && vcgencmd get_mem gpu



Selvittäkää miten tarkistetaan
-Raspberryn lämpötila
-kuinka paljon vapaata tilaa on jäljellä
-miten vaihdetaan polusta toiseen
