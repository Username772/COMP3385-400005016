<?php

abstract class Model
{
        //Properties
        protected $cached_json = [];

        abstract protected function getAll() : array;
        
        abstract protected function getRecord(string $id) : array;


/**-----------------------
 * 
 * A method has been added to load the JSON file.
 * 
 * ---------------------------------------------------------------------- */

        public function loadData(string $fromfile) : array
        {
                $filename = basename($fromFile, '.json'); //return the file base name if a path is return.
                
             if(!isset($this->cached_json[$filename]) || empty($this->cached_json[$filename]))
             {
                  $json_file = file_get_contents($fromFile);
                  $this->cached_json[$filename] = json_decode($json_file, true);
             }

             return $this->cached_json[$filename];

        }


        public function addData($user_data)
        {
            $new_user = ['Name', 'Email', 'password'];
            $jsonArray = [$new_user][$user_data];
            json_encode( $jsonArray, JSON_PRETTY_PRINT);

        } 
}