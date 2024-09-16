## 1:
Get --> demande des données specifiés (https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/GET)
Post--> envoie des données au serveur pour créer ou modifier (https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/POST)


  |   | Get | Post |
  | ---|---|---|
  | La requête a un corps | non | oui |
  | Une réponse réussie a du corps | oui | oui |
  | sûr | oui | non |
  | indempotant | oui | non |
  | Peut être mis en cache | oui | Uniquement si les informations sur la fraîcheur sont incluses |
  | autorisé dans les formulaires HTML | oui | oui |


(https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/GET)
(https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/POST)


3)il est extensible car il permet de transmettre des hypertextes et images et vidéos


4)Signification : HTTP est sans état car il ne conserve pas d'informations entre les requêtes. Chaque requête est indépendante.
Conséquences : Utilisation de cookies ou de sessions pour maintenir l'état. Simplifie la gestion des connexions et améliore la scalabilité du serveur.


5)Protocole : http:// ou https:// (spécifie le protocole).
Nom d'hôte : www.example.com (identifie le serveur).
Port : :80 ou :443 (facultatif, spécifie le port).
Chemin : /path/to/resource (localisation de la ressource).
Query String : ?key=value (paramètres supplémentaires).
Fragment : #section (partie spécifique de la ressource).


6)1xx - Informational : 100 Continue (le client peut continuer).
2xx - Success : 200 OK (requête réussie).
3xx - Redirection : 301 Moved Permanently (ressource déplacée).
4xx - Client Error : 404 Not Found (ressource non trouvée).
5xx - Server Error : 500 Internal Server Error (erreur serveur).


7)Le serveur sélectionne la réponse en fonction des en-têtes Accept du client. Par exemple, un client demandant Accept: application/json recevra une réponse JSON si disponible.

8)Fait sur xampp

10)
| En-tête | Rôle |
| --- | --- |
| Host |	Spécifie le domaine du serveur |
| User-Agent |	Identifie le client (navigateur, bot)|
| Accept |	Types de contenu acceptés |
| Accept-Language |	Langues préférées |
| Accept-Encoding |	Encodages acceptés (gzip, deflate) |
| Authorization |	Informations d'authentification |
| Cookie |	Cookies envoyés par le client |
|Connection |	Contrôle la persistance de la connexion |


