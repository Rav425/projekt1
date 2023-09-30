# Wirtschaftsinformatik-Projekt 1 - Hotelbnb

Im Wirtschaftsinformatik Projekt 1 wurde eine Webanwendung "Hotelbnb" für ein Hotel mit Unterkunftreservierung entwickelt.
Die Webanwendung ist in zwei Sichten (Anwender und Administrator) aufgebaut:

### Benutzeransicht

Die Benutzer können die Unterkünfte anschauen und Buchungen durchführen und sich dabei registrieren.
Je nach Ihrer Rolle können Benutzer Zimmer hinzufügen.

### Administrator-Ansicht

In der Administrator-Ansicht hat der Administrator die Möglichkeit, wichtige Daten zu verwalten. Dazu gehört das Hinzufügen, Ändern oder Löschen von Unterkünften. Des Weiteren kann der Administrator einen neuen Benutzer erstellen, indem er dessen E-Mail-Adresse verwendet und ein standardmäßig generiertes Passwort zuweist. Dieses Passwort muss der Benutzer bei seiner ersten Anmeldung ändern, um die Sicherheit seiner Zugangsdaten zu gewährleisten. Zusätzlich kann der Administrator dem Benutzer eine Rolle zuweisen, entweder als Kunde oder Verkäufer.

### Installationsanweisungen

1. Projektordner herunterladen:
   > Der Projektordner ist auf Ihren lokalen Webserver zu clonen z.B. in XAMPP ist das Projekt unter `htdocs` Ordner herunterzuladen.
2. Datenbankverbindung erstellen:
   > Zu aller erst soll die Datenbank aufgebaut werden, dafür ist die Datei `projekt1/zn (2).sql` zu nutzen.
   > Die Verbindung zur Datenbank wird von der Datei `projekt1/config/db.php` durchgeführt.

### Inbetriebsnahme

1. Webanwendung aufrufen:

   > Die Webanwendung ist durch `projekt1/` für die Useransicht abzurufen.

2. Zugriff auf die Administrator-Ansicht:
   > Die Administrator-Ansicht ist durch `projekt1/dashboard/login/` abzurufen.
   > Hier sind die Anmeldedaten für den Administrator:
   >
   > Benutzeremail: `kasho.mobi1@gmail.com`
   >
   > Passwort: `111111`
