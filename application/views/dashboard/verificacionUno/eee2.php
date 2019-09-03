<div id="test1" class="col s12" style="padding-right: 0px; padding-left: 0px">
          <center><h4>Sección para Registrar</h4></center>
  <div id="test-swipe-1" class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%; margin-left: 20px">
            <div class="card-content black-text">

             <span class="card-title"><center><h5> Hoja de verificación 1</h5></center></span>
             <div class="row">
               
              <div class="input-field col s12 m12 l12  " id="div_empresa">
                <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
                  <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle la "Hoja de verificacion 1"</option>
                  <?php 
                  $s="SELECT empresa.id,empresa.razon_social,empresa.identificacion FROM verificadorxempresa
                        INNER JOIN empresa ON empresa.id = verificadorxempresa.empresa_id
                        WHERE verificadorxempresa.persona_id = '$_SESSION[vev_verificador]' AND informacion_as = 'si' AND verificacion1 ='no'";
                  $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r)>0){
                    while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social] - $rw[identificacion]</option>";          
                    }         
                  }
                  ?>
                </select>
              </div>        
            </div>
            <div class="row">
              <form id="form_verificacion1">
               <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Cumplimiento legal</div>
                  <div class="collapsible-body">
                   <div class="row" style="text-align: center;background-color: #bdbdbd;">Cumplimiento legal</div>
                   <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
                    <div class="divider" ></div>
                    <?php

                    $s="SELECT id,nombre from opciones where codigo LIKE '%CUMPLIMIENTO_LEGAL%'  order by id ";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){

                       $i++;
                       echo"
                       <div class='row'>
                       <div class='input-field col s12 m6 l6'>
                       <input type='hidden' name='opcion[]' value='$rw[id]' />
                       <label for=''>$rw[nombre]</label>
                       </div>
                       <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
                       <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
                       $s1="SELECT id,nombre from si_no_noaplica order by id desc ";
                       $r1= mysqli_query($conn,$s1) or die('Error');
                       if(mysqli_num_rows($r1)>0){
                        while($result1=mysqli_fetch_assoc($r1)){
                          echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                        }
                      }
                      echo"
                      </select>
                      <label for=''>Si/ No/ No Aplica</label>
                      </div>
                      <div class='input-field col s12 m4 l4'>
                      <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
                      <label for=''>Observaciones</label>
                      </div>
                      </div>
                      <div class='divider'></div>";

                    }         
                  }
                  ?>
                  
                </div>
              </li>

              <li>
                <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>  Condiciones laborales</div>
                <div class="collapsible-body">
                 <div class="row" style="text-align: center;background-color: #bdbdbd;"> Condiciones laborales</div>
                 <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
                   
                  <div class="divider"></div>
                  <?php

                  $s="SELECT id,nombre from opciones where codigo LIKE '%CONDICION_LABORAL%'  order by id ";
                  $r= mysqli_query($conn,$s) or die("Error");
                  if(mysqli_num_rows($r)>0){
                    while($rw=mysqli_fetch_assoc($r)){

                     $i++;
                     echo"
                     <div class='row'>
                     <div class='input-field col s12 m6 l6'>
                     <input type='hidden' name='opcion[]' value='$rw[id]' />
                     <label for=''>$rw[nombre]</label>
                     </div>
                     <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
                     <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
                     $s1="select id,nombre from si_no_noaplica order by id desc";
                     $r1= mysqli_query($conn,$s1) or die('Error');
                     if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Si/ No/ No Aplica</label>
                    </div>
                    <div class='input-field col s12 m4 l4'>
                    <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
                    <label for=''>Observaciones</label>
                    </div>
                    </div>
                    <div class='divider'></div>";

                  }         
                }
                ?>
                
              </div>
            </li>

            <li>
              <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>  Impacto ambiental positivo y contribución a la conservación y preservación de los recursos ecosistemicos </div>
              <div class="collapsible-body">
               <div class="row" style="text-align: center;background-color: #bdbdbd;">Impacto ambiental positivo y contribución a la conservación y preservación de los recursos ecosistemicos </div>
               <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
                
                <div class="divider"></div>
                <?php 
                $s="SELECT id,nombre from opciones where codigo LIKE '%IMPACTO_AMBIENTAL%'  order by id ";
                $r= mysqli_query($conn,$s) or die("Error");
                if(mysqli_num_rows($r)>0){
                  while($rw=mysqli_fetch_assoc($r)){

                   $i++;
                   echo"
                   <div class='row'>
                   <div class='input-field col s12 m6 l6'>
                   <input type='hidden' name='opcion[]' value='$rw[id]' />
                   <label for=''>$rw[nombre]</label>
                   </div>
                   <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
                   <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
                   $s1="select id,nombre from si_no_noaplica order by id desc";
                   $r1= mysqli_query($conn,$s1) or die('Error');
                   if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                      echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
                  echo"
                  </select>
                  <label for=''>Si/ No/ No Aplica</label>
                  </div>
                  <div class='input-field col s12 m4 l4'>
                  <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
                  <label for=''>Observaciones</label>
                  </div>
                  </div>
                  <div class='divider'></div>";

                }         
              }
              ?>
              
            </div>
          </li>

          <li>
            <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Impacto social positivo </div>
            <div class="collapsible-body">
             <div class="row" style="text-align: center;background-color: #bdbdbd;">Impacto social positivo</div>
             <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
              
              <div class="divider"></div>
              <?php 
              $s="SELECT id,nombre from opciones where codigo LIKE '%IMPACTO_SOCIAL%'  order by id ";
              $r= mysqli_query($conn,$s) or die("Error");
              if(mysqli_num_rows($r)>0){
                while($rw=mysqli_fetch_assoc($r)){

                 $i++;
                 echo"
                 <div class='row'>
                 <div class='input-field col s12 m6 l6'>
                 <input type='hidden' name='opcion[]' value='$rw[id]' />
                 <label for=''>$rw[nombre]</label>
                 </div>
                 <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
                 <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
                 $s1="select id,nombre from si_no_noaplica order by id desc";
                 $r1= mysqli_query($conn,$s1) or die('Error');
                 if(mysqli_num_rows($r1)>0){
                  while($result1=mysqli_fetch_assoc($r1)){
                    echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                  }
                }
                echo"
                </select>
                <label for=''>Si/ No/ No Aplica</label>
                </div>
                <div class='input-field col s12 m4 l4'>
                <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
                <label for=''>Observaciones</label>
                </div>
                </div>
                <div class='divider'></div>";

              }         
            }
            ?>
            
          </div>
        </li>

        <li>
          <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Sustancias o materiales peligrosos</div>
          <div class="collapsible-body">
           <div class="row" style="text-align: center;background-color: #bdbdbd;">Sustancias o materiales peligrosos</div>
           <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
            
            <div class="divider"></div>
            <?php 
            $s="SELECT id,nombre from opciones where codigo LIKE '%MATERIAL_PELIGROSO%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

               $i++;
               echo"
               <div class='row'>
               <div class='input-field col s12 m6 l6'>
               <input type='hidden' name='opcion[]' value='$rw[id]' />
               <label for=''>$rw[nombre]</label>
               </div>
               <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
               <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";
               $s1="select id,nombre from si_no_noaplica order by id desc";
               $r1= mysqli_query($conn,$s1) or die('Error');
               if(mysqli_num_rows($r1)>0){
                while($result1=mysqli_fetch_assoc($r1)){
                  echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                }
              }
              echo"
              </select>
              <label for=''>Si/ No/ No Aplica</label>
              </div>
              <div class='input-field col s12 m4 l4'>
              <textarea id='verificacion1_obs".$i."' name='verificacion1_obs[]' class='materialize-textarea'></textarea>
              <label for=''>Observaciones</label>
              </div>
              </div>
              <div class='divider'></div>";

            }         
          }
          ?>
          
        </div>
      </li>
    </ul>
    
    <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="btn_verificacion1"><i class="material-icons right">add</i>Registrar</button>
  </form>
</div>
</div>

</div>
</div>
</div>
</div>
</section>  
</div>
</div>