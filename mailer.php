<?php
    $send = false;
if (isset($_POST["submit"])) {
    $recipient="rachen.wever@edu-kw1c.nl";
    $subject="Contactverzoek via website";
    $aanhef=$_POST["aanhef"];
    $naam=$_POST["naam"];
    $email=$_POST["email"];
    $telefoon=$_POST["telefoon"];
    $vraagOpmerking=$_POST["vraagOpmerking"];
    $nieuwsbrief=$_POST["nieuwsbrief"];
    $mailBody="
    <!html DOCTYPE>
    <html width=\"100%\">
        <head>
        <style>
            header{background-color:#F0F;}
            .ReadMsgBody{background-color:#000;}
            table{padding:20px; background-color:#D5D5D5;border-radius:5px;}
            background-color:black;
            margin-bottom:2px solid red;
        </style>
        </head>
        <body>
        <header class=\"top\" align=\"center\">
			<div class=\"logo\" style=\"text-align:center;\">
				<img src="HSV_logo_transparent.png">
			</div>
		</div>
        </header>
            <main align=\"center\"  width=\"100%\">
                <div align=\"center\">
                <table>
                <tbody>
                    <tr><td rowspan="2">$subject</td>></tr>
                    <tr><td>Aanhef:</td><td>$aanhef</td></tr>
                    <tr><td>Naam:</td><td>$naam</td></tr>
                    <tr><td>Klantnummer:</td><td>$email</td></tr>
                    <tr><td>Telefoon:</td><td>$telefoon</td></tr>
                    <tr><td>Onderwerp:</td><td>$onderwerp</td></tr>
                    <tr><td>Vraag/ opmerking:</td><td>$vraagOpmerking</td></tr>
                    <tr><td>Nieuwsbrief:</td><td>$nieuwsbrief</td></tr>
                </tbody>
                </table>
                </div>
            </main>
        </body>
    </html>
    ";
    $headers;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    mail($recipient, $subject, $mailBody, $headers);
    $headers;
    $send = true;
    if(send){
        header('location: contact.html');
        die();
    }
}
?>