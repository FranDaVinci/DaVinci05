<?php
function formularioCalendario($mes,$ano){
echo '
   <table align="center" cellspacing="2" cellpadding="2" border="0">
   <tr><form action="index.php" method="POST">';
echo '
<td align="center" valign="top">
      Mes: <br>
      <select name=nuevo_mes>
      <option value="1"';
if ($mes==1)
echo "selected";
echo'>Enero</option>
      <option value="2" ';
if ($mes==2)
   echo "selected";
echo'>Febrero</option>
      <option value="3" ';
if ($mes==3)
   echo "selected";
echo'>Marzo</option>
      <option value="4" ';
if ($mes==4)
   echo "selected";
echo '>Abril</option>
      <option value="5" ';
if ($mes==5)
      echo "selected";
echo '>Mayo</option>
      <option value="6" ';
if ($mes==6)
   echo "selected";
echo '>Junio</option>
      <option value="7" ';
if ($mes==7)
   echo "selected";
echo '>Julio</option>
      <option value="8" ';
if ($mes==8)
   echo "selected";
echo '>Agosto</option>
      <option value="9" ';
if ($mes==9)
   echo "selected";
echo '>Septiembre</option>
      <option value="10" ';
if ($mes==10)
   echo "selected";
echo '>Octubre</option>
      <option value="11" ';
if ($mes==11)
   echo "selected";
echo '>Noviembre</option>
      <option value="12" ';
if ($mes==12)
echo "selected";
echo '>Diciembre</option>
      </select>
      </td>';
echo '      
    <td align="center" valign="top">
      Año: <br>
      <select name=nuevo_ano>
   ';
//este bucle se podría hacer dependiendo del número de año que se quiera mostrar
//yo voy a mostar 10 años atrás y 10 adelante de la fecha mostrada en el calendario
for ($anoactual=$ano-10; $anoactual<=$ano+10; $anoactual++){
   echo '<option value="' . $anoactual . '" ';
   if ($ano==$anoactual) {
      echo "selected";
   }
   echo '>' . $anoactual . '</option>';
}
echo '</select>
      </td>';
echo '
   </tr>
   <tr>
    <td colspan="2" align="center"><input type="Submit" value="[ IR A ESE MES ]"></td>
   </tr>
   </table><br>
   
   <br>
   
   </form>';
} 
?>