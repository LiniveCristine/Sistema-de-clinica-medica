<?php $listaMedicos =  PegarListaJson('BD\listaMedicos.json');?>

<p><?= empty($listaMedicos)? 'Não há medicos cadastrados' : ' ';?></p>

<?php foreach($listaMedicos as $medico):?>
            <?php foreach($medico as $nomeMedico => $especialidade):?>
                <div>
                    <p><input type="checkbox" name="<?=$nomeMedico?>"> <?= "Dr(a): $nomeMedico - $especialidade"?></p>
                </div>
            <?php endforeach; ?>
             
<?php endforeach; ?>


