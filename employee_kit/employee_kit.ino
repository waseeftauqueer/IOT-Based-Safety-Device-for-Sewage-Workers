
#include <ESP8266WiFi.h>

const char* ssid     = "WT";
const char* password = "password";

const char* host = "iotproject2025.000webhostapp.com";
const char* streamId   = "....................";
const char* privateKey = "....................";
int lvl=0;
int aqi=0;
int meth=0;

int pulse=A0;
int btrate,flg,count=0;
void setup(void)
{
 
  ESP.wdtDisable();
// Your code here
ESP.wdtEnable(WDTO_8S); 

  Serial.begin(115200);
  pinMode(D3,INPUT);
  pinMode(D8,OUTPUT);
  digitalWrite(D8,HIGH);
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
   
}

void loop(void)
{ 
  heartbeat();
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

  String url = "GET http://iotproject2025.000webhostapp.com/Sewage/update2.php?hb="; // Getting info from my online database through my online website
  url+=btrate;
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
  void heartbeat()
  {
   
  count=0;
  for(int i=0;i<1000;i++)
  {
    if(analogRead(pulse)>550 && flg==0)
    {
      count+=1;
      flg=1;
    }
  if(analogRead(pulse)<550)
      flg=0; 
  delay(10);
  }
  btrate=count*4;
Serial.print("heartbeat: ");
Serial.println(btrate);
Serial.print(analogRead(A0));
    }
    
