<?php
  namespace App\Core;

  class Request
  {
    //recupere url
      private function formatUrl():array{
        $url=explode('/',$_SERVER['REQUEST_URI']);
        unset($url[0]);
        return array_values($url);
      }
//recuperr le controlleur et l'action
      public function getUrl():array|string{
        $url=$this->formatUrl();
        return [$url[0],$url[1]];
      }
      public function isPost():bool{
        return $_SERVER['REQUEST_METHOD']=='POST';
      }
      public function isGet():bool{
        return $_SERVER['REQUEST_METHOD']=='GET';
      }
      //recupere les les parametres de requete
      public function query():array{
        $url=$this->formatUrl();
        //supprime le controlleur et l'action
        unset($url[0]);
        unset($url[0]);
        return array_values($url);
      }
      //recuperer les valeurs du post
      public function request():array{
        return $_POST;
      }
  }