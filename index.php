<?php 

    class User {
        public $name;
        public $lastname;
        public $email;
        public $password;

        public function getUserData() {
            return $this->name . ' ' . $this->lastname . ' ' . $this->email;
        }
    }

    // istanza Topolino
    $topolino = new User();
    $topolino->name = 'Mikey';
    $topolino->lastname = 'Mouse';
    $topolino->email = 'mikey@disney.com';

    // istanza Paperino
    $paperino = new User();
    $paperino->name = 'Donald';
    $paperino->lastname = 'Duck';
    $paperino->email = 'donald@disney.com';

    // istanza Pippo
    $pippo = new User();
    $pippo->name = 'Goofy';
    $pippo->lastname = 'Holler';
    $pippo->email = 'goofy@disney.com';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utenti</title>
</head>
<body>
    <div>
        <h2>Dati Utenti:</h2>
        <ul>
            <li>
                <?php echo $topolino->getUserData(); ?>
            </li>

            <li>
                <?php echo $paperino->getUserData(); ?>
            </li>

            <li>
                <?php echo $pippo->getUserData(); ?>
            </li>
        </ul>
    </div>
</body>
</html>