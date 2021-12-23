<?php

    class Database{
        private $link;

        public function __construct()
        {
            $this -> connect();
        }

        private function connect()
        {
            
            
            
            $dsn = "mysql:host=localhost;port=3306;dbname=url_shortener;charset=utf8";
            $this->link = new \PDO($dsn,'root', '');

            return $this;
        }

        // Возвращает активные  url 
        public function get_activ_url()
        {
            $stmt = $this->link->prepare('SELECT * FROM short_url ');


            $stmt->execute();

            $urls= $stmt->fetchAll(PDO::FETCH_ASSOC);

            $result = $urls;
            return $result;
        }

        public function update_token($token){

            $stmt = $this->link->prepare('UPDATE short_url SET time_create = now() WHERE token = :token');
            $stmt->execute([':token' => $token]);

        }

        // Возвращает token по url (аргументы: long_url)
        public function get_token_by_long_url($long_url)
        {
            $stmt = $this->link->prepare('SELECT token FROM short_url WHERE long_url = :long_url');
            $stmt->execute([':long_url' => $long_url]);

            $token = $stmt->fetchAll();

            $result = $token[0]['token'];
            return $result;

        }

        // Добавить новый токен (аргументы: long_url, token, ip)
        public function add_short_url($long_url, $token, $ip)
        {
            $stmt = $this->link->prepare("INSERT INTO short_url (long_url, token, ip, time_create)
                    VALUES (:long_url, :token, :ip, NOW());");

            $stmt->bindParam(':long_url', $long_url);
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':ip', $ip);

            

            $stmt->execute(); 
        }

        // Удаляет токен(аргументы: token)
        public function del_token_by_token($token)
        {
            $stmt = $this->link->prepare('DELETE FROM short_url WHERE token = :token');
            $stmt->bindParam(':token', $token);

            $stmt->execute(); 
        }

        

        //Удаляет просроченные токены
        public function del_tokens_by_date(){
            $stmt = $this->link->prepare('DELETE FROM short_url WHERE time_create < now() - interval (3*60*24) minute');
        

            $stmt->execute(); 
        }




        //Добавить сапись в историю (аргументы: short_url, user_agent, ip)
        public function add_item_in_story($short_url,$user_agent,$ip)
        {
            $stmt = $this->link->prepare("INSERT INTO story (short_url, user_agent, ip, transition_date)
                    VALUES (:short_url, :user_agent, :ip, NOW());");

            $stmt->bindParam(':short_url', $short_url);
            $stmt->bindParam(':user_agent', $user_agent);
            $stmt->bindParam(':ip', $ip);


            $stmt->execute(); 
            
        }
        //Возвращает long_url по токену(аргументы: token)
        public function get_long_url_by_token($token)
        {
            $stmt = $this->link->prepare('SELECT long_url FROM short_url WHERE token = :token');
            $stmt->execute([':token' => $token]);
            $long_url = $stmt->fetchAll();

            $result = $long_url[0]['long_url'];
           

            return $result;
        
        }
        //
        public function time_out($token){

            $stmt = $this->link->prepare('SELECT long_url FROM short_url WHERE token = :token and (time_create < now() - interval (3*60*24) minute)');
            $stmt->execute([':token' => $token]);
            $long_url = $stmt->fetchAll();

            $result = $long_url[0]['long_url'];
           
            if(!empty($result)){
                return 1;
            } else{
                return 0;
            }
            

        }


       

        //Проверяет есть ли url в БД(аргументы: long_url)
        public function if_url_in_db($long_url)
        {
            $stmt = $this->link->prepare('SELECT token FROM short_url WHERE long_url = :long_url');
            $stmt->execute([':long_url' => $long_url]);

            $result = $stmt->fetchAll();
            
            if(!empty($result)){
                return 1;
            }else{
                return 0;
            }

        }

        //Проверяет есть ли token в БД (аргументы: token)
        public function if_token_in_db($token)
        {
            $stmt = $this->link->prepare('SELECT token FROM short_url WHERE token = :token');
            $stmt->execute([':token' => $token]);

            $result = $stmt->fetchAll();
            
            if(!empty($result)){
                return 1;
            }else{
                return 0;
            }
        }

    }
    

