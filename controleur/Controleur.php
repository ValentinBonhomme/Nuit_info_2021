<?php

class Controleur {
    
    
    function __construct() {
        global $rep,$vues; // nécessaire pour utiliser variables globales
    // on démarre ou reprend la session si necessaire (préférez utiliser un modèle pour gérer vos session ou cookies)
       session_start();


    //debut

    //on initialise un tableau d'erreur
        $dVueEreur = array ();

        try{                      

            
            $action=isset($_REQUEST['action']) ? $_REQUEST['action'] : NULL;
            //action à tester
            switch($action) {

                case "seDeconnecter":
                    $this->seDeconnecter();
                    break;
                
                case NULL:                          
                    $this->Reinit();
                    break;
                
                
                default:
                    $dVueEreur[] ="action incorrecte";                
                    require ($rep.$vues['erreur']);
                    break;
        }

    } 
    catch (PDOException $e)
    {

            $dVueEreur[] = $e->getMessage();
            require ($rep.$vues['erreur']);

    }
    catch (Exception $e2)
    {

        $dVueEreur[] =$e2->getMessage();
        require ($rep.$vues['erreur']);
    }


    //fin
    exit(0);
    }//fin constructeur


    function Reinit() {
        global $rep,$vues; // nécessaire pour utiliser variables globales
        $modele = new MDL();         
        require $rep.$vues['mainPage'];
    }
    
    function seDeconnecter(){
        global $rep,$vues;
        $model = new MDL();
        $model->deconnexion();
        $this->Reinit();
    }
}

?>
