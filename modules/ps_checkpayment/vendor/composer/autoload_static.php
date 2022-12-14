<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef005ade8cc558666ccdd3b53d0b3879
{
    public static $classMap = array (
        'Ps_Checkpayment' => __DIR__ . '/../..' . '/ps_checkpayment.php',
        'Ps_CheckpaymentPaymentModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/payment.php',
        'Ps_CheckpaymentValidationModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/validation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitef005ade8cc558666ccdd3b53d0b3879::$classMap;

        }, null, ClassLoader::class);
    }
}
