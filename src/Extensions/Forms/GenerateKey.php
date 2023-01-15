<?php

namespace Liumenggit\GenerateKey\Extensions\Forms;

use Dcat\Admin\Form\Field\Text;
use Liumenggit\GenerateKey\GenerateKeyServiceProvider;


class GenerateKey extends Text
{
    protected $view = 'liumenggit.generate-key::generate';
    protected $options = [
        'upClass' => 'primary shadow-0',
        'downClass' => 'light shadow-0',
        'center' => true,
        'disabled' => false,
    ];


    // protected function formatFieldData($data): string
    // {
    //     // 获取到当前字段值
    //     return parent::formatFieldData($data);
    // }


    public function render()
    {
        //配置
        // $this->prepend('<i class="fa fa-internet-explorer fa-fw"></i>')
        //     ->defaultAttribute('type', 'url');

        $this->options['length'] = (int)GenerateKeyServiceProvider::setting('length');
        $this->options['lower'] = in_array('lower', GenerateKeyServiceProvider::setting('constitute'));
        $this->options['upper'] = in_array('upper', GenerateKeyServiceProvider::setting('constitute'));
        $this->options['number'] = in_array('number', GenerateKeyServiceProvider::setting('constitute'));
        $this->options['symbol'] = in_array('symbol', GenerateKeyServiceProvider::setting('constitute'));
        return parent::render();
    }

    //创建配置方法
    public function combinedKey(array $attribute = [])
    {
        $this->attribute($attribute);

        // $this->attribute('test', GenerateKeyServiceProvider::setting('length'));

        return $this;
    }
}
