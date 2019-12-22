<?php

declare(strict_types=1);


if (!function_exists('redirect')) {
    /**
    * Redirect the user to given path.
    *
    * @param string $path
    *
    * @return void
    */
    function redirect(string $path)
    {
        header("Location: ${path}");
        exit;
    }
}

if (!function_exists('userLoggedIn')) {
    /**
    * Checks if the user is logged in or not
    * @return bool
    */
    function userLoggedIn()
    {
        if (isset($_SESSION['user'])) {
            return true;
        } else{
            return false;
        }
    }

}


if (!function_exists('alreadyExistInDatabase')) {
    /**
    * Checks if email or username exist in the database
    * @param  string $searchedEmail    The searched email
    * @param  string $searchedUsername The searched username
    * @param  object $pdo              [description]
    * @return bool                     [description]
    */
    function alreadyExistInDatabase(string $searchedEmail, string $searchedUsername, object $pdo):array {
        $statement = $pdo->prepare('SELECT * FROM users WHERE email = :searchedEmail OR username = :searchedUsername');
        $statement-> execute([
            ':searchedEmail' => $searchedEmail,
            ':searchedUsername' => $searchedUsername
        ]);

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}


if (!function_exists('getUserData')) {

    function getUserData(object $pdo):array {
        $statement = $pdo->prepare('SELECT * FROM users WHERE id = :id');
        $statement->execute([
            ':id' => $_SESSION['user']['id']
        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }




}

if (!function_exists('getUserPosts')) {
    function getUserPosts(object $pdo):array {
        $statement = $pdo->prepare('SELECT * FROM posts WHERE user_id = :id');
        $statement->execute([
            ':id' => $_SESSION['user']['id']
        ]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}


if (!function_exists('getPost')) {
    function getPost(object $pdo, int $id):array {
        $statement = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
        $statement->execute([
            ':id' => $id
        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
