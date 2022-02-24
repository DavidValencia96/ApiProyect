<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
 
class UserModel extends Database
{
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM usuario ORDER BY id_usuario ASC LIMIT ?", ["i", $limit]);
    }

    // public function postUsers()
    // {
    //     return $this->insert("INSERT INTO usuario (`id_usuario`,`nombre_us`,`apellidos_us`,`edad`,`dni_us`,`contrasena_us`, 
    //                                                 `telefono_us`,`residencia_us`,`correo_us`,`sexo_us`,`adicional_us`, 
    //                                                 `avatar`,`us_tipo`)
    //                                                 VALUES (NULL,'test2','test2','2021-01-11','123456','12345567','2456', 
    //                                                         'mede','juan@test.com','m','a',NULL,'2')");
    // }

    
}