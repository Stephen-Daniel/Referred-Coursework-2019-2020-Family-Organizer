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
    }
    
