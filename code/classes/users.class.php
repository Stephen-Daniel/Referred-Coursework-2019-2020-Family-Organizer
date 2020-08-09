<?php

class Users extends Dbh{
    
    protected function getAppointmentIds(){
        
        $sql = "SELECT appointment_id FROM appointments";
            $stmt = $this->connect()->prepare($sql);
            $appointmentIds = $stmt->fetchALL();
            
                return $appointmentIds;
            }
        
    }
    
