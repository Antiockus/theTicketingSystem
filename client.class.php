<?php
    class Client
    {
        protected $client_name;
        protected $client_url;
        protected $client_description;

        public function __construct($client_name, $client_url, $client_description)
        {
            $this->setClientName($client_name);
            $this->setClientUrl($client_url);
            $this->setClientDescription($client_description);
        }

        /**
         * @return mixed
         */
        public function getClientName()
        {
            return $this->client_name;
        }

        /**
         * @param mixed $client_name
         */
        public function setClientName($client_name)
        {
            $this->client_name = $client_name;
        }

        /**
         * @return mixed
         */
        public function getClientUrl()
        {
            return $this->client_url;
        }

        /**
         * @param mixed $client_url
         */
        public function setClientUrl($client_url)
        {
            $this->client_url = $client_url;
        }

        /**
         * @return mixed
         */
        public function getClientDescription()
        {
            return $this->client_description;
        }

        /**
         * @param mixed $client_description
         */
        public function setClientDescription($client_description)
        {
            $this->client_description = $client_description;
        }


        public function saveClient(){
            $db = new DB();
        }


    }