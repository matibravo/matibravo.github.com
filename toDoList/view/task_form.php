<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <!--fonts google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <!--Custom css-->
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
        <header>
            <h1> Lista de tareas</h1>
        </header>
        <section>
            <div class="container">
                <div class="form">
                    <form name="valida_datos" action="index.php?controller=task&action=save" method="post">
                        <input type="hidden" name="id" >
                        <label for="title"> Título</label>
                        <input type="text" id="title_text" name="title">
                        <label for="description"> Descripción</label>
                        <textarea id="description_text" name="description" rows="8" cols="50" ></textarea>
                        <button type="button" id="btn_guardar">Guardar</button>
                    </form>
                </div>
                <div class="listas">
                    <table>
                        <tr class="filaTitle"> <!--FILA-->
                            <?php
                                require_once './core/const.php';
                                foreach(DATA_TASK as $key=>$value):
                            ?>
                            <td> <?php echo $value; ?> </td> <!--Columna-->
                            <?php endforeach; ?>
                        </tr>
                            <?php
                                foreach($this->model->getAll() as $task): 
                            ?>
                        <tr>
                             <td> <?php echo $task->title; ?> </td>
                             <td> <?php echo $task->description; ?> </td>
                             <td> <a onclick="javascript:return confirm('Estás seguro de querer eliminar esta tarea?');" class="btn_eliminar"  href="index.php?controller=task&action=quit&id=<?php echo $task->id; ?>">Eliminar </a></td>                                    
                        </tr> 
                            <?php endforeach; ?>       
                    </table>
                </div>  
            </div>               
        </section>        
        <footer >
            <a href="https://cl.linkedin.com/in/matias-bravo-castro-98a3a36a" target="_blank" rel="noopener noreferrer">App creada por Matibravo</a>
        </footer> 
        <script src="./js/main.js"></script>            
</body>
</html>