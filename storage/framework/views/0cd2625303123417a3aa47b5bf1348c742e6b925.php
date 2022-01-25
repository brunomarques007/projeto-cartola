<?php $__env->startSection('content'); ?>

	<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title"><?php echo e(__('Criar uma nova liga')); ?></h5>
                </div>
                <form method="post" action="#" autocomplete="off">
                    <div class="card-body">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('post'); ?>

                            <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Name')); ?></label>
                                <input type="text" name="name" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Dê um nome a sua liga')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

							<div class="form-group<?php echo e($errors->has('valor') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Valor')); ?></label>
                                <input type="text" name="valor" class="form-control<?php echo e($errors->has('valor') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Valor')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'valor'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('taxa') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Taxa')); ?></label>
                                <input type="text" name="taxa" class="form-control<?php echo e($errors->has('taxa') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Taxa')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'taxa'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="form-group<?php echo e($errors->has('premiacao') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Premiacao')); ?></label>
                                <input type="number" name="premiacao" class="form-control<?php echo e($errors->has('premiacao') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('valor de premiação em reais')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'premiacao'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('rodadas') ? ' has-danger' : ''); ?>">
                                <label><?php echo e(__('Número de rodadas')); ?></label>
                                <input type="number" name="rodadas" class="form-control<?php echo e($errors->has('rodadas') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Quantas rodadas?')); ?>">
                                <?php echo $__env->make('alerts.feedback', ['field' => 'rodadas'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary"><?php echo e(__('Criar Liga')); ?></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <h5 class="title"><?php echo e(__('Crie sua ligas')); ?></h5>
                            </a>
                            <p class="description">
                                <?php echo e(__('Regras para a criãção de ligas')); ?>

                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        <?php echo e(__('Ao criar uma liga você deve ter em mente as seguintes regras:')); ?>

                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<script type="text/javascript">
	$('#valor').blur(function(){
        $('#valor').formatCurrency();
    });
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['pageSlug' => 'dashboard'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /app/scripts/laravel-teste/projeto-cartola/resources/views/ligas/create.blade.php ENDPATH**/ ?>