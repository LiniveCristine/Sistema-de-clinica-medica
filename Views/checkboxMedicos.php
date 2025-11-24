<?php $listaMedicos =  PegarListaJson('BD\listaMedicos.json');?>

<h2><?= empty($listaMedicos)? 'Não há medicos cadastrados' : ' ';?></h2>

<?php foreach($listaMedicos as $medico):?>
            <?php foreach($medico as $nomeMedico => $especialidade):?>
                <div>
                    <p><?= "Dr(a): $nomeMedico - Especialidade: $especialidade"?></p>
                    <input type="checkbox" name="<?=$nomeMedico?>"> 
                </div>
            <?php endforeach; ?>
             
<?php endforeach; ?>


