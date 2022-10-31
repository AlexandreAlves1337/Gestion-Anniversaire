# Gestion-Anniversaire

Il s'agit d'une application qui permet d'afficher les anniversaires des personnes que l'on connaît.
 
Sur la page anniv.php on affiche un tableau avec le prénom, la date de naissance et l'âge de chaque personne.
 
Si on affiche cette page le jour d'un ou plusieurs anniversaire, on affiche un message pour souhaiter un bon anniversaire.
 
Par ailleurs, on a mis en place un CRON qui permet d'envoyer un mail dans les cas suivant :
 
 - s'il y a un ou plusieurs anniversaires à fêter aujourd'hui
 - s'il y a un ou plusieurs anniversaires à fêter dans 1 semaines
 - s'il y a un ou plusieurs anniversaires à fêter dans 2 semaines
 
Il ne faut pas envoyer plusieurs mails donc tout doit envoyer dans un seul mail donc mise en place de gestion des conditions selon l'ensemble de cas possible.

# Birthday Manager

This is an application that allows you to display the birthdays of people you know.

On the page anniv.php we display a table with the first name, the date of birth and the age of each person.

If we display this page on the day of one or more birthdays we display a message to wish a happy birthday.

In addition, we have set up a CRON that allows you to send an email in the following cases:

 - if there are one or more birthdays to celebrate today
 - if there are one or more birthdays to celebrate in 1 week
 - if there are one or more birthdays to celebrate in 2 weeks

It is not necessary to send several emails so everything must be sent in a single email, therefore setting up conditions management according to all possible cases.