<?php
/**
 * Projet : gaming Site
 * Nom : userManagement.php
 * Auteur : Christnovie.KIALA-BI
 * Date : 08.10.2020
 */
/**
 * @brief This function is designed to verify user's login
 * @param $userEmailAddress : must be meet RFC 5321/5322
 * @param $userPsw : users's password
 * @return bool : "true" only if the user and psw match the database. In all other cases will be "false".
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function isLoginCorrect($userEmailAddress, $userPsw )
{
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT userHashPsw FROM users WHERE Email = '.$userEmailAddress.'or Pseudo ='.$userEmailAddress.';' ;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) {
        $userHashPsw = $queryResult[0]['userHashPsw'];
        $result = password_verify($userPsw, $userHashPsw);
    }
    return $result;
}

/**
 * @brief This function is designed to register a new account
 * @param $peudo
 * @param $userEmailAddress : must be meet RFC 5321/5322
 * @param $userPsw : user's password
 * @return bool : "true" only if the user doesn't already exist. In all other cases will be "false".
 * @throws ModelDataBaseException : will be throw if something goes wrong with the database opening process
 */
function registerNewAccount($peudo,$userEmailAddress, $userPsw)
{
    $result = false;



    $userHashPsw = password_hash($userPsw, PASSWORD_DEFAULT);

    $registerQuery = 'INSERT INTO users (`Pseudo`,`Email`, `userHashPsw`) VALUES (' .$peudo.','. $userEmailAddress .',' . $userHashPsw . ')';

    require_once 'model/dbConnector.php';
    $queryResult = executeQueryInsert($registerQuery);
    if ($queryResult) {
        $result = $queryResult;
    }
    return $result;
}