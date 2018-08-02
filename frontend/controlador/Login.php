<?php
class Controlador_Login extends Controlador_Base {

  function __construct(){
    global $_SUBMIT;
    $this->data = $_SUBMIT;
  }
  
  public function construirPagina(){
    if( Modelo_Usuario::estaLogueado() ){
      Utils::doRedirect(PUERTO.'://'.HOST.'/perfil/');
    }
    
    if ( Utils::getParam('login_form') == 1 ){
      try{
        $campos = array('username'=>1, 'password'=>1);
        $data = $this->camposRequeridos($campos);
                
        

    
        
        
          /*$userid = Model_Customer::auth($this->username, $this->password);
            if(!isset($_SESSION['cms_data']['customer']['option'])){          
                if (Model_Customer::hasQuestions($userid)){           
                Utils::doRedirect(PORT.'://'.HOST.'/login/'.$userid.'/');  
                }            
                else{           
                Utils::doRedirect(PORT.'://'.HOST.'/questions/'.$userid.'/');
                }
            }
            else{           
            $this->redirectToController('home');           
            }*/
          
          
      }
      catch( Exception $e ){
        $error = $e->getMessage();
      }
    } 

    $tags = array();

    Vista::render('login', $tags);  
    
  }

}  
?>