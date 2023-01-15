<?php

namespace Liumenggit\GenerateKey;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Liumenggit\GenerateKey\Extensions\Forms\GenerateKey;

class GenerateKeyServiceProvider extends ServiceProvider
{
    protected $js = [
        'js/generate-key.js',
        'js/generate-password.js',
    ];
    protected $css = [
        'css/index.css',
    ];

    public function register()
    {
    }

    public function init()
    {
        parent::init();
        Admin::requireAssets('@liumenggit.generate-key');
        Form::extend('generateKey', GenerateKey::class);

    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
