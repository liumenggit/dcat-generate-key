<?php

namespace Liumenggit\GenerateKey;

use Dcat\Admin\Extend\Setting as Form;

class Setting extends Form
{
    public function title()
    {
        return $this->trans('genrate-key.title');
    }

    public function form()
    {
        $this->number('length', $this->trans('genrate-key.fields.length'))->required()->value(10)->max(32)->min(4);
        $this->checkbox('constitute', $this->trans('genrate-key.fields.constitute'))
            ->options([
                'lower' => $this->trans('genrate-key.options.lower'),
                'upper' => $this->trans('genrate-key.options.upper'),
                'number' => $this->trans('genrate-key.options.number'),
                'symbol' => $this->trans('genrate-key.options.symbol'),
            ])->rules('required', [
                'required' => $this->trans('genrate-key.help.least'),
            ])->setLabelClass(['asterisk']);
        $this->generateKey('key', '密钥')->help('保存设置后从新打开，配置才会生效。')->default('', true);
    }
}
