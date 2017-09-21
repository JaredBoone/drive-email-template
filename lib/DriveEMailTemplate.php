<?php

namespace OCA\DriveEMailTemplate;

use OC\Mail\EMailTemplate;

class DriveEMailTemplate extends EMailTemplate
{

    /**
     * Adds a header to the email
     */
    public function addHeader()
    {
        if ($this->headerAdded) {
            return;
        }
        $this->headerAdded = true;

        $logoUrl = $this->urlGenerator->getAbsoluteURL(\OC::$server->getURLGenerator()->imagePath('driveemailtemplate', 'logo-mail.png'));
        $this->htmlBody .= vsprintf($this->header, [$this->themingDefaults->getColorPrimary(), $logoUrl, $this->themingDefaults->getName()]);
    }
}