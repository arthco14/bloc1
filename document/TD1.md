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

**Request Header**

|Champ d'en-tête| Signification | Exemple |
|----|:---:|:---:|
|Accept|Les types de contenu que le client peut traiter ; si le champ est vide, il s’agit de tous les types de contenu|Accept: text/html, application/xml|
|Accept-Charset|Quels jeux de caractères le client peut afficher|Accept-Charset: utf-8|
|Accept-Encoding|Les formats compressés pris en charge par le client|Accept-Encoding: gzip|
|Accept-Language|Version linguistique souhaitée|Accept-Language: fr-FR|
|Authorization|Données d’authentification (par exemple pour un login)|Basic WjbU7D25zTAlV2tZ7==|
|Cache-Control|Options du mécanisme de mise en cache|Cache-Control: no-cache|
|Cookie|Cookie stocké pour ce serveur|Cookie: $Version=1; Content=23|
|Content-Length|Longueur de l’organisme demandeur|Content-Length: 212|
|Content-Type|Type MIME ; pertinent pour les requêtes POST et PUT|Content-Type: application/x_222-form-urlencoded|
|Date|Date et heure de la demande|Date: Mon, 9 March 2020 09:02:22 GMT|
|Expect|	Formule une attente au serveur, généralement la réception d’une demande importante|Expect: 100-continue (le serveur doit envoyer le code 100 lorsqu’il est prêt à recevoir la requête)|
|Host|Nom de domaine du serveur|Host: exemple.fr|
|If-Match|	Exécution conditionnelle d’une action, en fonction de la concordance d’un code transmis|If-Match: „ft678iujhnjio90’pöl“|
|If-Modified-Since|Envoyer uniquement si le contenu demandé a été modifié depuis le moment spécifié|IF-Modified-Since: Mon 2 Mar 2020 1:00:00 GMT|
|If-None-Match|Comme ci-dessus, mais spécifié via un ETag (Entity-Tag = tag d’entité, voir ci-dessous)|If-None-Match: „cxdrt5678iujhgbvb“|
|If-Range|Ne demande que la partie du contenu qui a été modifiée ou qui manque dans le cache du client|If-Range: Mon 2 Mar 2020 1:00:00 GMT|
|If-Unmodified-Since|Analogue à IF-Modified-Since|If-Modified-Since: Mon 2 Mar 2020 1:00:00 GMT|
|Max-Forwards|Définit le nombre maximum de fois que la réponse du serveur peut être transmise|Max-Forwards: 12|
|Proxy-Authorization|Utilisé pour authentifier le client auprès d’un serveur proxy|Proxy-Authorization: Basic WjbU7D25zTAlV2tZ7==|
|Range|Précise une partie du contenu demandé|Range: bytes=0-9999|
|Referrer|URL de la ressource à partir de laquelle la demande est faite (c’est-à-dire à partir de laquelle le lien a été créé)|Referrer: https://exemple.fr/index.html|
|TE|Codage de transfert d’extension accepté|TE: gzip, deflate|
|User-Agent|User-Agent du client (simplement dit : le navigateur)|Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36|

**Response Header**

|Champ d'en-tête| Signification | Exemple |
|----|:---:|:---:|
|Accept-Ranges|Unités que le serveur accepte pour les spécifications de la plage (voir ci-dessus)|Accept-Ranges: bytes|
|Age|Nombre de secondes pendant lesquelles l’objet a été dans la mémoire cache|Age: 2300|
|Allow|Types de demandes autorisées pour une ressource spécifique|Allow: GET, POST, HEAD|
|Cache-Control|Si l’objet peut être conservé dans le cache et pendant combien de temps|Cache-Control: max-age=4800|
|Connection|Type de connexion préféré|Connection: close|
|Content-Encoding|Type de compression|Content-Encoding: deflate|
|Content-Language|Langue de la ressource|Content-Language: fr-FR|
|Content-Length|Taille du corps en octets|Content-Length: 135674|
|Content-Location|Emplacement du fichier s’il provient d’un endroit différent de celui demandé (par exemple CDN)|Content-Location: /exemple.fr|
|Content-Security-Policy|Concepts de sécurité du serveur|Content-Security-Policy: frame-src ‘none’; object-src ‘none’|
|Content-Type|Type MIME du dossier demandé|Content-Type: text/tml; charset=utf-8|
|Date|Délai de réponse|Date: Mon 2 Mar 2020 1:00:00 GMT|
|ETag|Marque une version spécifique du fichier|ETag: „vt6789oi8uztgfvbn“|
|Expires|Quand le dossier doit être considéré comme obsolète|Expires: Tue 3 Mar 2020 1:00:00 GMT|
|Last-Modified|Date de la dernière modification du dossier|Last-Modified: Mon 2 Mar 2020 1:00:00 GMT|
|Location|Identifie le lieu où la demande a été transmise|Location: https://www.exemple.fr|
|Proxy-Authenticate|Indique si et comment le client doit s’authentifier auprès du proxy|Proxy-Authenticate: Basic|
|Retry-After|A partir de quand le client doit faire une nouvelle demande si la ressource est temporairement indisponible (date ou secondes)|Retry-After: 300|
|Server|Identification du serveur|Server: Apache|
|Set-Cookie|Installe un cookie chez le client|	Set-Cookie: UserID=XY; Max-Age=3800; Version=1|
|Transfer-Encoding|Méthode de compression|Transfer-Encoding: gpzip|
|Vary|Indique quels champs d’en-tête doivent être considérés comme variables si un fichier est demandé dans le cache|Vary: User-Agent (= le serveur contient différentes versions de fichiers selon l’User Agent)|
|Via|Via quels proxies la réponse a été envoyée|Via : 1.1www.exemple.fr|


