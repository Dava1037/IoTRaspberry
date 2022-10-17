# IoTRaspberry
### 12.9.2022 Suunnitelma
### Projekti on tulossa
![alt text](https://user-images.githubusercontent.com/113332647/189599208-ddef9db7-ffe7-4479-b46c-4af63731b899.jpg)
![alt text](https://user-images.githubusercontent.com/113332647/189601623-9b14cc20-2b0e-4689-a565-15080d1b61d0.png) 

# Projektissa (Roope, Leo, David)
    13.9 'We started the installation of the raspberry but we are stuck right now on the Testing of the server'
    15.9 'Now the server is working'


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

### 16.9 Arduino
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

    On the ardiuno platform we had to open a new sketch and create the order to run the arduino serial:

    void setup() {

    Serial.begin(9600);
    }

    //with this you can make it repeat the serial as a loop and we noticed that changing the value in the delay makes it faster or slower when you check       the  Sarjamonitori in the Ardiuno program 
    void loop() {
    Serial.println("Arduino");
    delay(100);
    }

## 19.9 This is how the MARIADB works

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

## 20.9 TEHTÄVÄ: 
    Selvittäkää mitä tarkoitavat:
    EEPROM: EEPROM tai E²PROM (engl. Electronically Erasable Programmable Read-Only Memory) on haihtumatonta puolijohdemuistia, joka voidaan uudelleenkirjoittaa n. 10 000–100 000 kertaa. EEPROM-muistia käytetään pääasiassa asetustietojen tallentamiseen mikroprosessorin tai mikrokontrollerin sisältävissä laitteissa.

    UART: Se on lyhenne sanoista: Universal asynchronus reciever and transmission, tarkoittaa sarjaliikenne protokollaa, joka tapahtuu kahdella linjalla tai digitaalisella nastalla, jotka ovat RX (nasta0) ja TX nasta1).

    Arduino sisältää USB-sarjamuuntimen, joka avulla mikro-ohjain alijärjestelmä voi olla suoran yhteydessä tietokoneeseen (esim raspberry PI:hin)

    -I2C: Sarjaliikenne protokolla, jota käytetään yleisesti anturipohjaisissa projekteissa. I2C mahdollistaa selkeän tiedonsiirtoreitin ydinpiirin ja ohjainpiirin välillä.

    -SPI: Serial peripheral interface. Tätä yleisesti käytetään, kun halutaan kahden mikro-ohjaimen keskustelevan keskenään.


## Common comands RASPBERRY

    apt-get update: Synchronizes the list of packages on your system to the list in the repositories. Use it before installing new packages to make sure you are installing the latest version.

    clear: Clears previously run commands and text from the terminal screen.

    date: Prints the current date.

    find/ -name esimerkki.txt: Searches the whole system for the file example.txt and outputs a list of all directories that contain the file.

    nano example.txt: Opens the file example.txt in the Linux text editor Nano.

    poweroff: To shutdown immediately.

    raspi-config: Opens the configuration settings menu.

    reboot: To reboot immediately.

    shutdown -h 01:22: To shutdown at 1:22 AM.

    startx: Opens the GUI (Graphical User Interface)


    cat esimerkki.txt: Displays the contents of the file example.txt.

    cd/abc/xyz: Changes the current directory to the /abc/xyz directory

    |s -|

    mkdir esimerkki:_polku: Creates a new directory named example_directory inside the current directory

    mv XXX: Moves the file or directory named XXX to a specified location. For example, mv

    rm esimekki: Deletes the file example.txt

    scp user @10.0.0.32:/sine/path/tiedosto.txt: Copies a file over SSH. Can be used to download a file from a PC to the Raspberry Pi. user@10.0.0.32 is the username and local IP address of the PC, and /some/path/file.txt is the path and file name of the file on the PC.

    touch example.txt: Creates a new, empty file named example.txt in the current directory.


    ifconfig: To check the status of the wireless connection you are using (to see if wlan0 has acquired an IP address).

    iwconfig: To check which network the wireless adapter is using.

    iwlist wlan0 grep ESSID: Use grep along with the name of a field to list only the fields you need (for example to just list the ESSIDs).

    nmap: Scans your network and lists connected devices, port number, protocol, state (open or closed) operating system, MAC addresses, and other information.

    ping: Tests connectivity between two devices connected on a network. For example, ping 10.0.0.32 will send a packet to the device at IP 10.0.0.32 and wait for a response. It also works with website addresses

    wget http://www.website.com/example.txt: Downloads the file example.txt from the web and saves it to the current directory.


    cat /proc /meminfo: Shows details about your memory.

    cat /proc /partions: Shows the size and number of partitions on your SD card or hard drive.

    cat/proc/version: Shows you which version of the Raspberry Pi you are using

    df -h: Shows information about the available disk space.

    df /: Shows how much free disk space is available

    dpkg--get-selections| grep XXX: Shows all of the installed packages that are related to XXX

    dpkg--get-selections: Shows all of your installed packages

    free: Shows how much free memory is available.

    hostname -I: Shows the IP address of your Raspberry Pi.

    lsusb: Lists USB hardware connected to your Raspberry Pi.

    UP key: Pressing the UP key will print the last command entered into the command prompt. This is a quick way to repeat previous commands or make corrections to commands.

    vcgenmd measure_temp:  Shows the temperature of the CPU

    vcgencmd get_mem am && vcgencmd get_mem gpu: Shows the memory split between the CPU and GPU.

## Practice on Terminal

    cd /home/       //opens the home database
    cd /home/rld-admin/Desktop      //
    touch Test        //Creates the file in the desktop
    cp Test Test2       //
    rm Test2        //Removes the file
    mv Test Test2       //Moves the file to specific place
    ls        //
    ls -larth       //shows information of the file like storage and last day/time that was edited

## 21.9 Practice on python

    import tkinter
    root = tk.Tk()

    label = tk.Label(text="Heippa maailma")
    label.pack()

    entry = tk.Entry()
    entry.pack()

                          //radiobuttons

    radioBtn = tk.Radiobutton(text="A", value= "A")
    radioBtn.pack()                                       //You have to right each time 'radioBtn.pack()' if you want to make the button.

    radioBtn = tk.Radiobutton(text="B", value= "B")
    radioBtn.pack()                                       //

    radioBtn = tk.Radiobutton(text="C", value= "C")
    radioBtn.pack()                                       //


    root.mainloop()

### To create a button (Python): 

    btn = tk.Button()
            text="Nappi",                                     //to instert the text of the button
            width=10,
            height=5,
            gb="blue",
            fg="black",
    //you can change the color of the background with 'bg=red' or the text color with 'fg=white', for example.


    ///To give an instruction to the button for example you define the instructions at the beginning with the root.configure soo when you press the button is change the color for example.
            root.configure(
            bg="black"
            )                             //now it changes to black everytime that you use the button

     def radBtn1():
         root.configure(bg="black")
## Miten label toimi

message =tk.Label(
    text="Heippa porukka!",
    foreground="white",
    bakcground="black",
    width=25,
    height=25
    )
message.pack()
#btn
btn = tk.Button(
    text="Nappi"
    width=25,
    height=5,
    bg="blue",
    fg="yellow"
    )
### Window 
import tkinter as tk
window = tk.Tk()
lb = tk.Label(text="Name")
entry = tk.Entry()

name = entry.get()
name

lb.pack()
entry.pack()

## 22.9 Testit

    1. a) Tietokanta on DAVID_LIIKE, LAHTI, LEO_LIIKE, LIIKE, infomration_schema, mysql, performance_schema)

       sudo maridb-> show database;

       b) you have to comment
       sudo mariadb-> show tables -> select from* [table name] ->describe [table name]

    2.

    import time
    import datetime
    import maridb
    import RPi.GPIO as GPIO

    InputPin = 4      

    GPIO.setmode(GPIO.BCM)
    GPIO.SETUP(4, GPIO.IN)


    conn = mariadb.connect(user="root", password="kissa123", host="localhost", database="LIIKE")
    cur = conn.cursor()


    Annettiin muututuja while True loopin sisälle arvo = GPIO.input(4) Lisättiin sqlStringiin etteen f ja muutettiin "5" kovakoodattu arvon tilalle {arvo}        
    try:
      while True:
          arvo = GPIO.input(InputPin)

          sqlStr = (f"INSERT INTO liike_tbl(arvo, aika) VALUES ({arvo}, now()")

          time.sleep(5)
          cur.execute(sqlStr)
          conn.commit()
      except:
        print("ei toimi :(")
        print(arvo)

      conn.close()
  
  
    3. DHT11: We created a database with some data that we got from a sensor
  
## 26.9 Basic introduction: 
    We had an basic introduce to HTML, talking about the anatomy of elements for example.
    THIS IS A FORM I MADE
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Box info</title>
    </head>
    <body>
        <div style="border: 1px dashed black; width:fit-content; text-align: center ">

            <form action="process.php" style="background-color: yellow " >


                <div>
                    <label for="fname">Nimi:</label>
                    <input type="text" id="fname" name="fname" placeholder="Etunimi" required>

                </div>

                <br>

                <div>
                  <label for="bdatee">Päivämäärä</label>
                  <input type="date">
                </div>

                <br>

                <div>
                    <label for="pass">Salasana</label>
                    <input type="password" name="pass" id="pass" placeholder="Think well" required>
                </div>

                <br>

                <div>
                    <label>Ikä (1-100)</label>

                    <input type="number" min="1" max="100"  placeholder=":)"
                    pattern="[1-100]">
                </div>

                <br>

                <div>
                 <label for="email">Sähköposti</label>
                 <input type="email" placeholder="think_well@hmail.com">
                </div>

                <br>

                <div >
                    <label for="Mies">Mies</label>
                    <input type="radio" id= "Mies" name="titulo" value="Mies">

                    <label for="Nainen">Nainen</label>
                    <input type="radio" id="Nainen" name="titulo" value="Nainen">

                    <label for="Any">Unknown</label>
                    <input type="radio" id="any" name="titulo" value="any">
                </div>
                <div>
                    <label for="payment">Donate:</label>
                    <select name="payment" id="payment">
                        <option value="mastercard">American express</option>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                    </select>

                </div>

                <br>
                <div>
                    <label for="subscribe">subscribe</label>
                    <input type="checkbox">
                </div>

                <textarea name="Message" id="Message" cols="30" rows="10" placeholder="120 merkien raja" maxlength="120"></textarea>
                <div>
                    <input type="reset">
                    <input type="submit">
                </div>


            </form>
        </div>
    </body>
    </html>

## 29.9 
    Today we started php first creating the website with html but the file is in .php. (IS IN THE SCHOOL'S LAPTOP)

## 30.9
    Let's add some more design to the forms.

## 10.10
    Here is the way how to connect with the localHost in the terminal:
    
        cd..        //This is the command to open the files 
        dir         //This is to show the directory and see in which file or folder I can enter
        
        C:\Users\eduagudevil\Desktop\PHP>php\php -S localhost:8000          //This opens the localhost and then I go to browser and type localhost:8000 and I am already watching the results. Also is posible to visualize the files that I have fore example if I use localhost:8000/index.php I can run the documents that are in .php

## MySql injektio:

    <?php
    include 'config.php';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn-> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['nimimerkki'];
    $viesti = $_POST['viesti'];
    $stmt = $conn->prepare('INSERT INTO Keskustelu2 (nimi, viesti) VALUES (?, ?)');       //you have to write ? instead of the 
    $stmt->bind_param('ss', $name, $viesti);

    $stmt->execute();

    $conn->close();

    header("Location: form.php");
    die();
    ?>


## How to avoid the inyection:

    <?php
    include 'config.php';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn-> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['nimimerkki'];
    $viesti = $_POST['viesti'];
    $stmt = $conn->prepare('INSERT INTO Keskustelu2 (nimi, viesti) VALUES (?, ?)');
    $stmt->bind_param('ss', $name, $viesti);

    $stmt->execute();

    $conn->close();

    header("Location: form.php");
    die();
    ?>
