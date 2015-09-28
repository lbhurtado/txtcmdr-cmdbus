<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 23:04
 */

namespace App\Listeners;

use App\Events\LoadWasPosted;

class CreditLoad extends SMSNotifier
{
    public function whenLoadWasPosted(LoadWasPosted $event)
    {
        $contact = $this->project->getOrCreateContact(array(
            'phone_number' => $event->load->mobile,
        ));

        $service = $this->project->initServiceById(ELOAD_ID);

        $service->invoke(array(
            'context' => "contact",
            'contact_id' => $contact->id
        ));
    }
}