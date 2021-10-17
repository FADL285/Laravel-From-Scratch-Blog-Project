<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/17/2021
 * Time: 11:48 AM
 */

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function __construct(protected ApiClient $client)
    {
        //
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}
