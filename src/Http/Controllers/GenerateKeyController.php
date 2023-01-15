<?php

namespace Liumenggit\GenerateKey\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Routing\Controller;
use Dcat\Admin\Form;
use Liumenggit\GenerateKey\Models\AdminSettings;

class GenerateKeyController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('liumenggit.generate-key::index'));
    }
}
