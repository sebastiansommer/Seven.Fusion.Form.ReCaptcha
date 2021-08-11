<?php
namespace Seven\Fusion\Form\ReCaptcha\Validation\Validator;

use Exception;
use Neos\Flow\Validation\Validator\AbstractValidator;
use ReCaptcha\ReCaptcha;

class ReCaptchaValidator extends AbstractValidator
{
    /**
     * @var array
     */
    protected $supportedOptions = [
        'secretKey' => ['', 'The private key of the Recaptcha', 'string', true]
    ];

    /**
     * @param mixed $value The value that should be validated
     * @return void
     * @throws Exception
     */
    protected function isValid($value)
    {
        if (!is_string($value)) {
            $this->addError('The given value was not a valid string.', 1628656434);
            return;
        }

        $recaptcha = new ReCaptcha($this->options['secretKey']);
        $resp = $recaptcha->verify($value, $_SERVER['REMOTE_ADDR']);

        if ($resp->isSuccess() === false) {
            $this->addError('Please check the box "I am not a robot" and try again.', 1628656431);
        }
    }
}
