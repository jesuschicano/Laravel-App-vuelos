<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
  <form action = "/create" method = "post">
    <!-- tenemos que especificar la ruta a donde iremos en action -->
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <!-- IMPORTANTE AGREGAR EL TOKEN PARA PROTECCIÓN CONTRA INYECCIONES -->
    <label for="">Inserta student</label><br>
    <input type="text" name="stud_name"><br>

    <input type = 'submit' value = "Add student"/>
  </form>
</body>
</html>
