<?php

namespace Botble\Credit\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Credit\Http\Requests\CreditRequest;

class CreditForm extends FormAbstract
{

    /**
     * @return mixed|void
     * @throws \Throwable
     */
    public function buildForm()
    {
        $this
            ->setModuleName(CREDIT_MODULE_SCREEN_NAME)
            ->setValidatorClass(CreditRequest::class)
            ->withCustomFields()
            ->add('post_id', 'text', [
                'label' => 'Motor ID',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'motor_id',
                ],
            ])
            ->add('uang_muka', 'text', [
                'label' => 'Uang Muka',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'uang_muka',
                ],
            ])
            ->add('diskon', 'text', [
                'label' => 'Diskon',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'diskon',
                ],
            ])
            ->add('bulan_11', 'text', [
                'label' => 'Bulan 11',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'bulan_11',
                ],
            ])
            ->add('bulan_17', 'text', [
                'label' => 'Bulan 17',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'bulan_17',
                ],
            ])
            ->add('bulan_23', 'text', [
                'label' => 'Bulan 23',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'bulan_23',
                ],
            ])
            ->add('bulan_27', 'text', [
                'label' => 'Bulan 27',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'bulan_27',
                ],
            ])
            ->add('bulan_29', 'text', [
                'label' => 'Bulan 29',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'bulan_29',
                ],
            ])
            ->add('bulan_33', 'text', [
                'label' => 'Bulan 33',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'bulan_33',
                ],
            ])
            ->add('bulan_35', 'text', [
                'label' => 'Bulan 35',
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'placeholder' => 'bulan_35',
                ],
            ])
           
            ->setBreakFieldPoint('status');
    }
}