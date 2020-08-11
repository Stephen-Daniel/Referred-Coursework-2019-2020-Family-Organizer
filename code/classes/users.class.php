<?php



class Users extends Dbh{
    
    
    protected function getUser($name) {
        
      $sql = "SELECT * FROM family WHERE family_first = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$name]);
      $results = $stmt->fetchALL();
      return $results;
    }
    
    protected function setUser($familyFirst,$familyLast, $familyEmail, $familyFid, $familyPwd){
            
            $sql = "INSERT INTO family(family_first, family_last, family_email, family_fid, family_pwd) values (?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$familyFirst,$familyLast, $familyEmail, $familyFid, $familyPwd]);
            
        }
    
        protected function getAllTheFamily(){
            
            $sql= "SELECT * FROM family";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return json_encode($results);
        }
        
        protected function getAllAppointmentIds(){
            $sql= "SELECT appointment_id from appointments";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        protected function getAllAppointmentsOrderByStart(){
            $sql= "SELECT * FROM appointments order by start";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        protected function getAllDeadlineIds(){
            $sql= "SELECT deadline_id from deadlines";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        protected function setNewAppointment($familyId, $appointment, $start, $comment, $note){
            
            $sql = "INSERT INTO appointments (family_id, appointment, start, comment, note) values (?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$familyId, $appointment, $start, $comment, $note]);
            
        }
        
    }
    
