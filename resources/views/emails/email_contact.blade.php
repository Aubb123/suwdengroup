<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border: 1px solid #dddddd;">
        <div style="background-color: #2BA0E3; padding: 20px; text-align: center; color: #ffffff;">
            <h1 style="margin: 0; font-size: 24px;">Formulaire de contact</h1>
        </div>
        <div style="padding: 20px; line-height: 1.6;">
            <p style="margin: 0 0 20px 0;">Bonjour M. Pinheiro,</p>
            <p style="margin: 0 0 20px 0;">Vous avez un tout nouveau message provenant du formulaire de contact qui se trouve sur la page Contact de votre site web.</p>
            <p style="margin: 0 0 20px 0;">Pour commencer, elle a été envoyée par : M. <span style="color: #2BA0E3">{{ $validatedData['name'] }}</span>, ayant pour adresse mail <span style="color: #2BA0E3">{{ $validatedData['email'] }}</span>, et numéro mobile <span style="color: #2BA0E3">{{ $validatedData['phone'] }}</span>.

            <center>
                <a href="#" style="display: inline-block; padding: 10px 20px; background-color: #2BA0E3; color: #ffffff; text-decoration: none; border-radius: 5px; margin-top: 20px;">
                    Voici ce qu'il ou elle a écrit :
                </a>
            </center>
            <p style="margin: 20px 0 0 0;">{{ $validatedData['message'] }}</p>
            <hr>
            <p>Nous vous prions de lui répondre en lui écrivant à son adresse qui est la suivante : <b>{{ $validatedData['email'] }}</b>. Évitez de répondre directement à cet email en cliquant sur le bouton "Répondre" qui se trouve en haut du mail.</p>
            <p style="margin: 20px 0 0 0;">Merci,<br>L'équipe Hostinger</p>
        </div>
        <div style="background-color: #f4f4f4; padding: 10px; text-align: center; font-size: 12px; color: #777777;">
            <p style="margin: 0;">&copy; 2024 Suwdengroup. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
