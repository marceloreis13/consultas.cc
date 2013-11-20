<?php 
/**
* Adiciona os CSSs e Scripts especificas dos formularios
*/
echo $this->element('OnDemand/edit');
?>
<div class="box box-bordered">
    <?php echo $this->element('Edit/panel')?>
    <div class="box-content nopadding">
        <?php echo $this->AppForm->create($modelClass, array('defaultSize' => 'input-xlarge', 'classForm' => 'form-vertical form-bordered form-striped'))?>
            <div style="display:none;">
                <?php echo $this->Form->input('id')?>
            </div>            
            <?php echo $this->AppForm->input('aco_id')?>
            <?php echo $this->AppForm->input('name')?>
            <?php echo $this->AppForm->input('description')?>
            <?php echo $this->AppForm->btn('Save changes');?>
        <?php echo $this->AppForm->end()?>
    </div>
</div>