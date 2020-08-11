<?php


class UsersView extends Users {
    
 
    public function showUser($name){
        $results = $this->getUser($name);
        echo "Full name: " .$results[0]['family_email'];
    }
    
    public function showAllFamily(){
        $results = $this->getAllTheFamily();
        return $results;
    }
    
    public function showAllAppointmentIds(){
        $results = $this->getAllAppointmentIds();
        return $results;
    }
    public function showAllAppointmentsOrderByStart(){
        $results = $this->getAllAppointmentsOrderByStart();
        return $results;
    }
    public function showAllDeadlineIds(){
        $results = $this->getAllDeadlineIds();
        return $results;
    }
    
}