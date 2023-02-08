<?php 
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_USER', 'c0203e211e92759ede7cb44323ca0440');
    define('API_LOGIN', 'deeebd1d0274ffe336e2378ea9f45cac ');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


    if(!empty($_POST['firstname']) && !empty($_POST['sujet']) && !empty($_POST['email']) && !empty($_POST['subject'])){
        $sujet = htmlspecialchars($_POST['sujet']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "duc.tristan@hotmail.fr",
                'Name' => "duc"
                ],
                'To' => [
                [
                    'Email' => "duc.tristan@hotmail.fr",
                    'Name' => "duc"
                ]
                ],
                'Subject' => "Demande de renseignement",
                'HTMLPart' => "$email, $message", 
                
            ]
            ]
        ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès !";
        }
        else{
            echo "Email non valide";
        }

    } else {
        header('Location: contact.php');
        die();
    }