<?php

use AD7six\Dsn\Wrapper\CakePHP\V2\EmailDsn;

class EmailConfig {

/**
 * Define Mandrill for email
 */
    public $mandrill = array(
        'transport' => 'Mandrill.Mandrill',
        'uri' => 'https://mandrillapp.com/api/1.0/'
    );

/**
 * Define connections using environment variables
 *
 * @return void
 */
    public function __construct() {
            $this->default = EmailDsn::parse(env('EMAIL_URL'));
            $this->smtp = EmailDsn::parse(env('EMAIL_SMTP_URL'));
            $this->fast = EmailDsn::parse(env('EMAIL_FAST_URL'));
            $this->mandrill['key'] = env('MANDRILL_API_KEY');
    }

}
