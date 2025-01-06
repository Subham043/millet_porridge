<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Keyword;
use Spatie\Csp\Policies\Basic;

class ContentSecurityPolicy extends Basic
{
    public function configure()
    {
        // parent::configure();

        $this
        //start of basic policy
        ->addDirective(Directive::BASE, Keyword::SELF)
        ->addDirective(Directive::CONNECT, Keyword::SELF)
        ->addDirective(Directive::DEFAULT, Keyword::SELF)
        ->addDirective(Directive::FORM_ACTION, Keyword::SELF)
        ->addDirective(Directive::IMG, Keyword::SELF)
        ->addDirective(Directive::MEDIA, Keyword::SELF)
        ->addDirective(Directive::OBJECT, Keyword::NONE)
        ->addDirective(Directive::SCRIPT, Keyword::SELF)
        ->addDirective(Directive::STYLE, Keyword::UNSAFE_INLINE)
        ->addDirective(Directive::STYLE, Keyword::SELF)
        ->addDirective(Directive::FRAME, Keyword::SELF)
        ->addDirective(Directive::FONT, Keyword::SELF)
        ->addNonceForDirective(Directive::STYLE)
        ->addNonceForDirective(Directive::SCRIPT);

        //end of basic policy

        //start of custom policy
        $this
        ->addDirective(Directive::IMG, 'data:')
        ->addDirective(Directive::FONT, 'data:')
        ->addDirective(Directive::IMG, 'i.ytimg.com')
        ->addDirective(Directive::FONT, 'fonts.gstatic.com')
        ->addDirective(Directive::STYLE, 'fonts.googleapis.com')
        ->addDirective(Directive::SCRIPT, 'www.google.com')
        ->addDirective(Directive::SCRIPT, 'www.gstatic.com')
        ->addDirective(Directive::FRAME, 'www.google.com')
        ->addDirective(Directive::FRAME, 'maps.google.com')
        ->addDirective(Directive::FRAME, 'www.youtube-nocookie.com')
        ->addDirective(Directive::FRAME, 'www.youtube.com');
    }

}

?>