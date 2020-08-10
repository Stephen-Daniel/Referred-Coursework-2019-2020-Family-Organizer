<?php

class UsersContr extends Users{
    
    
    public function createUser($familyFirst,$familyLast, $familyEmail, $familyFid, $familyPwd){
        
        $this->setUser($familyFirst, $familyLast, $familyEmail, $familyFid, $familyPwd);
    }
    
    
}
