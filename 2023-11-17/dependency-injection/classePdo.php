<?php
class classePdo
{
    // simple class use pdo
    private $pdo;
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    }

    public function getAllArticles()
    {
        $req = $this->pdo->prepare('SELECT * FROM articles');
        $req->execute();
        $articles = $req->fetchAll(PDO::FETCH_OBJ);
        return $articles;
    }
    
    public function getArticle($id)
    {
        $req = $this->pdo->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute([$id]);
        $article = $req->fetch(PDO::FETCH_OBJ);
        return $article;
    }
}
