<?php
  namespace App\Core;
 
  class Session
  {
       public function open_session(){
            if (session_status()==PHP_SESSION_NONE) {
                session_start();
            }
        }
       public function destroy_session() {
            session_destroy();
        }
       public function KeyExist()
       {

       }
       public function getSession()
       {

       }
       public function removeKey()
       {

       }
       public function setSession()
       {

       }

  }

?>