<?php

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function getFreeDomainsCount($emails)
{
    $onlyDomain = array_map(function ($email) {
        return explode("@", $email)[1];
    }, $emails);

    $freeDomains = array_filter($onlyDomain, function ($domain) {
        return in_array($domain, FREE_EMAIL_DOMAINS);
    });
    return array_reduce($freeDomains, function ($acc, $domain) {
        if (!array_key_exists($domain, $acc)) {
            $acc[$domain] = 1;
        } else {
            $acc[$domain] += 1;
        }
        return $acc;
    }, []);
}