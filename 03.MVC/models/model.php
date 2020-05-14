<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){

        if( $enlacesModel == "home"  ||
            $enlacesModel == "page1" ||
            $enlacesModel == "page2" ||
            $enlacesModel == "page3"){

            $module = "views/modules/".$enlacesModel.".php";
        
        }

        return $module;

    }
}
?>