<?php

namespace app\enums;

class ContactsEnum
{
    const TYPE_PHONE = 1;
    const TYPE_MAIL = 2;
    const TYPE_ADDRESS = 3;

    public static function icons()
    {
        return [
            1 => 'icon-phone',
            2 => 'icon-envelope',
            3 => 'icon-location4'
        ];
    }
}
