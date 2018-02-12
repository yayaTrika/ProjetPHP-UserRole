<?php

  function getConnection()
  {
      $connecte= mysqli_connect('localhost','root', '', 'gestion_user');

      return $connecte;
  }

    function myExecuteSql($sql)
    {
        return mysqli_query(getConnection(),$sql);

    }
?>
