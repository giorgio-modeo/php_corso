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

   public function getPlayerId($nome) : int {
       try {
            $playerId = 'SELECT id_user FROM player WHERE pname = :nome';
            $query = $this->pdo->prepare($playerId);
            $query->bindParam(':nome', $nome, \PDO::PARAM_STR);
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
           $response = $this-> getPlayerId($_COOKIE['host']);
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
           $response = $this-> getPlayerId($_COOKIE['host']);
           $query->bindParam(':idPlayer', $response, \PDO::PARAM_STR);
           $query->execute();
         return $query->fetchColumn();
      } catch (\PDOException $e) {
         echo('query failed: ' . $e->getMessage());
         exit(1);
      }
   }
   public function setPlayer2() :void {
         try {
              $setPlayer2 = 'UPDATE game SET player2 = :idPlayer2 WHERE idGame = :idGame';
                $query = $this->pdo->prepare($setPlayer2);
                $response = $this-> getPlayerId($_COOKIE['nome']);

                $query->bindParam(':idPlayer2', $response, \PDO::PARAM_STR);
                $query->bindParam(':idGame', $this->getIdGame(), \PDO::PARAM_STR);

              $query->execute();
         } catch (\PDOException $e) {
              echo('query failed: ' . $e->getMessage());
              exit(1);
         }
   }
}