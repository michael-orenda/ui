<?php

namespace MichaelOrenda\Ui\View\Components\Organisms;

use Illuminate\View\Component;
use Illuminate\View\View;

class ForgotPasswordForm extends Component
{
    public function __construct(
        public string $action = '',
        public string $method = 'POST'
    ) {}

    public function render(): View
    {
        return view('ui::components.organisms.forgot-password-form');
    }
}