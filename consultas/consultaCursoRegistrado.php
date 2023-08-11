<?php 
error_reporting(0);
include('../class/conexion.php'); 
if ($_POST) {
$conn=conexion();
$nombrecurso=$_POST['nombrecurso'];
  
$sql="SELECT * from cg_cursos crs
where crs.crs_nombrecurso LIKE '%$nombrecurso%' ";
$res = mysqli_query($conn,$sql);
$filas = mysqli_num_rows($res);

if ($filas>=1) {
$datos='';
$datos.= '<table class="table table-striped projects">
                   <thead>
                       <tr>
                            <th>Nombre del Curso</th>
                             <th>Modalidad</th>
                             <th>Tipo</th>
                             <th>Fecha de Inicio</th>
                       </tr>
                                </thead><tbody>';
                                 while ($fila = mysqli_fetch_array($res)) {
                        $datos.= '<tr><td>'.$fila['crs_nombrecurso'].'</td><td>'.$fila['crs_modalidad'].'</td><td>'.$fila['crs_tipo'].'</td><td>
                          <a class="btn btn-info btn-sm" href="editaCurso?id='.$fila['crs_idCurso'].'">
                              <i class="fas fa-edit">
                              </i>
                              Editar curso
                          </a>
                      </td></tr>
              ';
}

$datos.='<tr><td colspan="5">
          <button type="button" class="btn btn-warning" onclick="nuevoCurso()">Agregar nuevo curso</button></td></tr>';
$datos.='</tbody></table>'; 

echo $datos;
} else  {
      echo '<div class="alert alert-block alert-info" id="avisoSinResultados">
              <p>
              <strong>
              <i class="ace-icon fa fa-check"></i>
              Ups.!
              </strong>
              No encontramos resultados para tus datos de busqueda, agrega el curso desde este botón 
              <button type="button" class="btn btn-warning" onclick="nuevoCurso()">Agregar nuevo Curso</button>
              </p>
              </div>';
 }
}

?>