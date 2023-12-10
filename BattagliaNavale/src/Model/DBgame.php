<?php
namespace App\Model;

class DBgame {
   private $pdo;

   public function __construct() {
       $dsn = 'mysql:dbname=battleship;host=127.0.0.1';
       $user = 'root';
       $password = '';
       $this->pdo = new \PDO($dsn, $user, $password);
   }

   public function getPlayerId() : int {
       try {
           $playerId = 'SELECT id_user FROM player WHERE pname = :nome';
           $query = $this->pdo->prepare($playerId);
           $query->bindParam(':nome', $_COOKIE['nome'], \PDO::PARAM_STR);
           $query->execute();
           return $query->fetchColumn();
       } catch (\PDOException $e) {
           echo('query failed: ' . $e->getMessage());
           exit(1);
       }
   }

   public function createGame() : void {
       try {
           $createGame = 'INSERT INTO game (player1) VALUES (:nome)';
           $query = $this->pdo->prepare($createGame);
           $response = $this-> getPlayerId();
           $query->bindParam(':nome', $response, \PDO::PARAM_STR);
           $query->execute();
       } catch (\PDOException $e) {
           echo('query failed: ' . $e->getMessage());
           exit(1);
       }
   }
   public function getIdGame() {
       try {
           $gameId = 'SELECT idGame FROM game WHERE player1 = :idPlayer and winner is null';
           $query = $this->pdo->prepare($gameId);
           $response = $this-> getPlayerId();
           $query->bindParam(':idPlayer', $response, \PDO::PARAM_STR);
           $query->execute();
         return $query->fetchColumn();
      } catch (\PDOException $e) {
         echo('query failed: ' . $e->getMessage());
         exit(1);
      }
   }
}