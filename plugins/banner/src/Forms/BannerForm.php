<?php

namespace Botble\Banner\Forms;

use Botble\Base\Forms\FormAbstract;
use Botble\Banner\Http\Requests\BannerRequest;

class BannerForm extends FormAbstract
{

    /**
     * @return mixed|void
     * @throws \Throwable
     */
    public function buildForm()
    {
        $this
            ->setModuleName(BANNER_MODULE_SCREEN_NAME)
            ->setValidatorClass(BannerRequest::class)
            ->withCustomFields()
            ->add('banner_popup', 'mediaImage', [
                'label' => 'Banner Popup (740x410)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('slideshow_01', 'mediaImage', [
                'label' => 'Slideshow 01 (1349x499)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('slideshow_02', 'mediaImage', [
                'label' => 'Slideshow 02 (1349x499)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('banner_31', 'mediaImage', [
                'label' => 'Banner 3.1 (360x175)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('banner_32', 'mediaImage', [
                'label' => 'Banner 3.2 (360x175)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('banner_33', 'mediaImage', [
                'label' => 'Banner 3.3 (360x175)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('banner_41', 'mediaImage', [
                'label' => 'Banner banner 4.1 (269x322)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('banner_42', 'mediaImage', [
                'label' => 'Banner 4.2 (269x322)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('banner_43', 'mediaImage', [
                'label' => 'Banner 4.3 (269x322)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('banner_44', 'mediaImage', [
                'label' => 'Banner 4.4 (269x322)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('footer', 'mediaImage', [
                'label' => 'Footer (1920x372)',
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('status', 'select', [
                'label' => trans('core.base::tables.status'),
                'label_attr' => ['class' => 'control-label required'],
                'attr' => [
                    'class' => 'form-control select-full',
                ],
                'choices' => [
                    1 => trans('core.base::system.activated'),
                    0 => trans('core.base::system.deactivated'),
                ],
            ])
            ->setBreakFieldPoint('status');
    }
}