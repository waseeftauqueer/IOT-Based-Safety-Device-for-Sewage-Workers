
#include <WiFi.h>

const char* ssid     = "wifi001";
const char* password = "12345678";

const char* host = "iotproject2025.000webhostapp.com";
const char* streamId   = "....................";
const char* privateKey = "....................";
int lvl=0;
int aqi=0;
int meth=0;

#include <Adafruit_Sensor.h>

#include "DHT.h"

#define DHTPIN 2     // Digital pin connected to the DHT sensor

#define DHTTYPE DHT11   // DHT 11


DHT dht(DHTPIN, DHTTYPE);

int count1=0;
int count11=0;
int flg=0;
int flag=0;
int btrate=0;
int flg1=0;
int flag1=0;
int btrate1=0;

int spo=0;
int gasv=0;
int delayMS=0;
float tp;
float mv;
int cel;
int sm=0;
int hum=0;
int ws=0;

float distance=0;
float duration=0;
int trig=5;
int echo=18;
void setup(void)
{
 
  Serial.begin(115200);
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
  pinMode(trig,OUTPUT);
  pinMode(echo,INPUT);
}

void loop(void)
{ 
  temperature();
  humidity();
  methane();
  airquality();
  drainage_level();
delay(1000);
    Serial.print("connecting to ");
  Serial.println(host);
  
  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;
  }

  String url = "GET http://iotproject2025.000webhostapp.com/Sewage/update.php?temp="; // Getting info from my online database through my online website
  url+=tp;
  url+="&hum=";
  url+=hum;
  url+="&meth=";
  url+=meth;
  url+="&aqi=";
  url+=aqi;
  url+="&lvl=";
  url+=lvl;
  url+=" HTTP/1.1\r\nHost: iotproject2025.000webhostapp.com\r\n\r\n";
  url += "\r\n\r\n";
  Serial.print("Requesting URL: ");
  Serial.println(url);
  
  // This will send the request to the server
  client.print(url);
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 5000) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }
  
  // Read all the lines of the reply from server and print them to Serial
  while(client.available()){
    char a=client.read();
    Serial.print(a);
   
    //String line = client.readStringUntil('\r');
    //Serial.print(line);
   
    Serial.print(a);
 
     
    } 
}
  void temperature()
  {
     tp = dht.readTemperature(false);
 Serial.print("Temp: ");
 Serial.println(tp);
  
    }
    
  void humidity()
  {
     
   hum=dht.readHumidity();
    
 Serial.print("Hum: ");
 Serial.println(hum);
  
    
    }
    
  void airquality()
  {
    aqi = analogRead(35);
   aqi/=10;
      Serial.print("Air Quality: ");
      Serial.println(aqi);
    }
  void methane()
  {
    meth = analogRead(34);
   meth/=10;
   Serial.print("methane: ");
   Serial.print(meth);
    }
  void drainage_level()
  {
    
  digitalWrite(trig,LOW);
  delayMicroseconds(2);
  digitalWrite(trig,HIGH);
  delayMicroseconds(10);
  digitalWrite(trig,LOW);  
  duration=pulseIn(echo,HIGH);
  distance=duration*.017;
  
  if(distance>100)
  distance=100;

  lvl = 100-distance;
  
   Serial.print("ultrasonic: ");
   Serial.print(lvl);
   Serial.print("ultrasonic: ");
   Serial.print(distance);
  delay(100);
 
    
    } 
