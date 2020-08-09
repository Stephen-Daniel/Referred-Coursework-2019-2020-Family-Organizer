<?php

class Test extends Dbh {
    
        public function getUsers(){
            
            $sql = "SELECT * FROM family";
            $stmt = $this->connect()->query($sql);
            while($row=$stmt->fetch());{
                
                echo $row=$stmt->fetch()['family_first'];
                
                echo $row=$stmt->fetch()['family_pwd'];
                
            }
        }
        
        
        public function getUsersStmt($familyFirst,$familyLast){
            
            $sql = "SELECT * FROM family WHERE family_first = ? AND family_last = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname]);
            $names = $stmt->fetchALL();
            
            foreach($names as $name){
                echo $name['family_id'];
            }
            
        }
        
        
        public function getAppointmentIds(){
            
            $sql = "SELECT appointment_id from appointments";
            
            }
        }
        
        
        
        
        

