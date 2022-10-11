<?php

abstract class Observable_Model extends Model implements Observable_interface
{
    protected $obserable = [];
    protected $updateddate = [];

    public function attach(Observable_Interface $o)
    {
        $this->observer[] = $o;
    }

    public function detach(Observer_Interface $o)
    {
         $this->observers = array_filter($this->observers, function ($a) use ($o)
         {
                return (!($a === $o));
         });

    }

    public function notify()
    {

        foreach($this->observers as $ob)
        {
            $ob->update($this);
        }

    }

    /**
     * This Method is used to pass the data that has been changed.
     */

     public function giveUpdate()
     {
        return $this->updateddata;
     }

     public function updateTheChangedDate(array $d)
     {
         $this->updateddata = $d;
     }

     abstract public function getAll() : array;

     abstract public function getRecord(string $id) : array;
}