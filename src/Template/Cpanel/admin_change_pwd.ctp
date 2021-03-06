<div>
    <ul class="breadcrumb">
        <li>
            <?php
                echo $this->Html->link(
                    __('Inicio'),
                    array(
                        'controller' => 'cpanel',
                        'action'     => 'home'
                    )
                );
            ?>
        </li>
        <li>/</li>
        <li>
            <?php
                echo $this->Html->link(
                    __('Cambiar Contraseña'),
                    array(
                        'controller' => 'cpanel',
                        'action'     => 'change_pwd'
                    )
                );
            ?>
        </li>
    </ul>
</div>

<?php
    if ($this->request->session()->read('alert') != '') {
?>

<div class="alert <?php echo ($this->request->session()->read('success') == 1) ? 'alert-success':'alert-error'; ?>">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>
        <?php 
            echo $this->request->session()->read('alert');
            $_SESSION['alert'] = '';
        ?>
    </strong>
</div>

<?php
    }
?>

<div class="row-fluid ">        
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-list-alt"></i><?php echo __(' Confirmar Contraseña'); ?></h2>
        </div>
        <div class="box-content">
            <?php
                echo $this->Form->create(
                    __(''),
                    array(
                        'url'   => array(
                            'controller' => 'cpanel',
                            'action'     => 'admin_change_pwd'
                        ),
                        'class' => 'form-horizontal'
                    )
                );
            ?>
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="textarea2"><?php echo __('Contraseña Anterior'); ?></label>
                    <div class="controls">
                        <?php
                            echo $this->Form->input(
                                'User.old_pwd',
                                array(
                                    'type'        => 'password',
                                    'class'       => 'input-large',
                                    'id'          => 'old_pwd',
                                    'div'         => false,
                                    'label'       => false,
                                    'placeholder' => __('Contraseña Anterior')
                                )
                            );
                        ?>
                        <script language="javascript" type="text/javascript">
                            var f1 = new LiveValidation('old_pwd');
                            f1.add( Validate.Presence);
                        </script>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="textarea2"><?php echo __('Nueva Contraseña'); ?></label>
                    <div class="controls">
                        <?php
                            echo $this->Form->input(
                                'User.new_pwd',
                                array(
                                    'type'        => 'password',
                                    'class'       => 'input-large',
                                    'id'          => 'new_pwd',
                                    'div'         => false,
                                    'label'       => false,
                                    'placeholder' => __('Nueva Contraseña')
                                )
                            );
                        ?>
                        <script language="javascript" type="text/javascript">
                            var f1 = new LiveValidation('new_pwd');
                            f1.add(Validate.Presence);
                            f1.add(Validate.len_password);
                        </script>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="textarea2"><?php echo __('Confirmar Contraseña'); ?></label>
                    <div class="controls">
                        <?php
                            echo $this->Form->input(
                                'User.confirm_pwd',
                                array(
                                    'type'        => 'password',
                                    'class'       => 'input-large',
                                    'id'          => 'confirm_pwd',
                                    'div'         => false,
                                    'label'       => false,
                                    'placeholder' => __('Confirmar Contraseña')
                                )
                            );
                        ?>
                        <script language="javascript" type="text/javascript">
                            var f1 = new LiveValidation('confirm_pwd');
                            f1.add(Validate.Presence);
                            f1.add(Validate.passwordchange);
                        </script>
                    </div>
                </div>
                <div class="form-actions">
                    <?php
                        echo $this->Form->Submit(
                            __('Aceptar'),
                            array(
                                'class' => 'btn btn-primary'
                            )
                        );
                    ?>
                </div>
            </fieldset>
        </div>
    </div>
</div>
