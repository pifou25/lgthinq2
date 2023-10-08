# Plugin lgthinq2

Plugin pour l'utilisation des appateils de la marque LG compatibles avec l'API `lgthinq`

Ce plugin nécessite d'avoir au préalable fait la configuration sur l'application propriétaire LG.


```mermaid
flowchart TD;
    A[Jeedom]<-->|Plugin LGThinq2| B(Broker MQTT);
    B<-->|Docker Daemon| C(Cloud LG);
    C<-->|Internet| D(Your Fridge\nor any LG Device);
```
