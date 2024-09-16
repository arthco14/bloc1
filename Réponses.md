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

4) HTTP sans état
Signification : HTTP est sans état car il ne conserve pas d'informations entre les requêtes. Chaque requête est indépendante.

Conséquences : Utilisation de cookies ou de sessions pour maintenir l'état. Simplifie la gestion des connexions et améliore la scalabilité du serveur.
