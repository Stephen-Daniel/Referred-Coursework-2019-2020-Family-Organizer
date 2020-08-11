<?php

class UsersContr extends Users{
    
    
    public function createUser($familyFirst,$familyLast, $familyEmail, $familyFid, $familyPwd){
        
        $this->setUser($familyFirst, $familyLast, $familyEmail, $familyFid, $familyPwd);
    }
    
    public function createNewAppointment($familyId, $appointment, $start, $comment, $note){
        
        $this->setNewAppointment($familyId, $appointment, $start, $comment, $note);
    }
}
